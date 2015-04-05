<?php
require_once 'includes/connection.php';
require_once 'includes/functions.php';
 sec_session_start(); // Our custom secure way of starting a PHP session.
 
if (isset($_POST['userId'], $_POST['password'])) {
     $userId = $_POST['userId'];
     $password = $_POST['password']; 
   
    if (login($userId, $password, $mysqli , $message) == true) {
        
        header('Location: dashboard.php');
    } else {
        // Login failed 
         header("Location: login.php?errorLogin=$message");
    }
} else {
   
     header("Location: login.php");
}
?>