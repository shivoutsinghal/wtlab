<?php require_once 'initialise.php';
      date_default_timezone_set("Asia/Kolkate"); ?>
<?php
    if(isset($_POST['editNewsletter']))
      {
      	 if(isset($_POST['bodyNewsletter'],$_POST['subjectNewsletter'],$_POST['newsletterID']))
      	 {
               $subject = $mysqli->real_escape_string($_POST['subjectNewsletter']);
               $body = $mysqli->real_escape_string($_POST['bodyNewsletter']);
               $newsletterID = $mysqli->real_escape_string($_POST['newsletterID']);
               $Status = 1;
               $dateTime = date("Y-m-d H:i:s");

               $stmt = $mysqli->prepare("UPDATE `newsletter` SET `Subject`= ? ,`Body`= ? ,`DateTime`= ?,`Status`= ? WHERE `ID` = ?");
               $stmt->bind_param("sssii",$subject,$body,$dateTime,$Status,$newsletterID);
               $stmt->execute();

               header("location:pending_nl_list.php");
      	 }
      	 else
      	 { 
      	 	header("location:pending_nl_list.php");
      	 }
      }
      else
      {
      	header("location:dashboard.php");
      }
?>