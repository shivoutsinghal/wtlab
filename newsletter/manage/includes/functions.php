<?php
date_default_timezone_set("Asia/Kolkata");

function account_blocked_email($username,$email)
{

    $subject = "Account Locked due to Security Reasons";
    $txt = "Dear $username , Your Account has been locked due to security reasons. 
            There wore more than 5 incorrect login attempts. To Reactivate the account , please contact the SuperAdmin. ";
    $headers = "From: whiteLeaf@security.com" . "\r\n" ;

    mail($to,$subject,$txt,$headers);
}

function sec_session_start() {
    $session_name = 'sec_session_id';   // Set a custom session name
    $secure = SECURE;
   
    $httponly = true;
    // Forces sessions to only use cookies.
    if (ini_set('session.use_only_cookies', 1) === FALSE) {
         header("Location: ../503.html");
        exit();
    }
    // Gets current cookies params.
    $cookieParams = session_get_cookie_params();
    session_set_cookie_params($cookieParams["lifetime"],
        $cookieParams["path"], 
        $cookieParams["domain"], 
        $secure,
        $httponly);
    // Sets the session name to the one set above.
    session_name($session_name);
    session_start();            // Start the PHP session 
    session_regenerate_id(true);    // regenerated the session, delete the old one. 
}

function login($userID, $password, $mysqli , &$message) {
   
    if ($stmt = $mysqli->prepare("SELECT UserName , UserID, Password , Email
                                  FROM admininfo
                                  WHERE UserID = ?
                                  AND `Status` = '1'
                                  LIMIT 1")) {
        $stmt->bind_param('s', $userID); 
        $stmt->execute();    
        $stmt->store_result();
 
       
        $stmt->bind_result( $username , $user_id, $db_password , $email );
        $stmt->fetch();
 
        
        $password = hash('sha512', $password );
        if ($stmt->num_rows == 1) {
            // If the user exists we check if the account is locked
            // from too many login attempts 
 
            if (checkbrute($user_id, $mysqli) == true) {
                // Account is locked 
                account_blocked_email($username , $email);
                $message = "Account Locked";
                return false;
            } else {
                // Check if the password in the database matches
                // the password the user submitted.
                if ($db_password == $password) {
                    // Password is correct!

                    // Get the user-agent string of the user.
                    $user_browser = $_SERVER['HTTP_USER_AGENT'];
                    $_SESSION['user_id'] = $user_id;
                    $username = preg_replace("/[^a-zA-Z0-9_\-]+/", "", $username);
                    $_SESSION['username'] = $username;
                    $_SESSION['login_string'] = hash('sha512', $password . $user_browser);
                    // Login successful.
                    return true;
                } else {
                    // Password is not correct
                    // Record this attempt in the database
                    $now = date("Y-m-d H:i:s");
                    $mysqli->query("INSERT INTO adminloginattempts(`UserID`, `TimeStamp`)
                                    VALUES ('$user_id', '$now')");

                    $message = "Incorrect Password";
                    return false;
                }
            }
        } else {
            $message = "No Such User Exists /Account Locked";
            return false;
        }
    }
}

function checkbrute($user_id, $mysqli) {
   
    $now = date("Y-m-d H:i:s");
   // All login attempts are counted from the past 2 hours. 
   $valid_attempts = date("Y-m-d H:i:s",strtotime("-2 hours",strtotime($now)));
 
    if ($stmt = $mysqli->prepare("SELECT `TimeStamp` 
                                 FROM adminloginattempts 
                                 WHERE UserID = ? 
                                AND `TimeStamp` > '$valid_attempts'")) {
        $stmt->bind_param('s', $user_id);
 
        
        $stmt->execute();
        $stmt->store_result();
 
        // If there have been more than 5 failed logins 
        if ($stmt->num_rows > 5) {

            // Block the User

             $stmt =$mysqli->prepare("UPDATE admininfo SET `Status` = ?
                                      WHERE UserID = ?
                                      AND `Status` != ?");
             $blocked = 0;
             $stmt->bind_param('isi', $blocked,$user_id,$blocked);
 
             // Execute the prepared query. 
             $stmt->execute();
            return true;
        } else {
            return false;
        }
    }
    else
        return false;
}


function login_check($mysqli) {
    // Check if all session variables are set 
    if (isset($_SESSION['user_id'], $_SESSION['username'], $_SESSION['login_string'])) {
 
        $user_id = $_SESSION['user_id'];
        $login_string = $_SESSION['login_string'];
        $username = $_SESSION['username'];
 
        // Get the user-agent string of the user.
        $user_browser = $_SERVER['HTTP_USER_AGENT'];
 
        if ($stmt = $mysqli->prepare("SELECT Password 
                                      FROM admininfo 
                                      WHERE UserID = ? LIMIT 1")) {
            
            $stmt->bind_param('s', $user_id);
            $stmt->execute();  
            $stmt->store_result();
 
            if ($stmt->num_rows == 1) {
               
                $stmt->bind_result($password);
                $stmt->fetch();
                $login_check = hash('sha512', $password . $user_browser);
 
                if ($login_check == $login_string) {
                    // Logged In!!!! 
                    return true;
                } else {
                    // Not logged in 
                    return false;
                }
            } else {
                // Not logged in 
                return false;
            }
        } else {
            // Not logged in 
            return false;
        }
    } else {
        // Not logged in 
        return false;
    }
}


?>