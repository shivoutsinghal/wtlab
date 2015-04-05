<?php require_once 'initialise.php';
      date_default_timezone_set("Asia/Kolkate"); ?>
<?php
    if(isset($_POST['addNewsletter']))
      {
      	 if(isset($_POST['bodyNewsletter'],$_POST['subjectNewsletter']))
      	 {
            $subject = $mysqli->real_escape_string($_POST['subjectNewsletter']);
            $body = $mysqli->real_escape_string($_POST['bodyNewsletter']);
            $dateTime = date("Y-m-d H:i:s");

            $stmt = $mysqli->prepare("INSERT INTO `newsletter`(`Subject`, `Body`, `DateTime`) 
            	                     VALUES (?,?,?)");
            $stmt->bind_param("sss",$subject,$body,$dateTime);
            $stmt->execute();

            header("location:pending_nl_list.php");
      	 }
      	 else
      	 {
      	 	header("location:nl_create.php");
      	 }
      }
      else
      {
      	header("location:dashboard.php");
      }
?>