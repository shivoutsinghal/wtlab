<?php require_once 'initialise.php' ; ?>
<?php
   if(isset($_POST['deleteIdNL'],$_POST['typeOfNL']))
   {
   	  $NewsletterID = $mysqli->real_escape_string($_POST['deleteIdNL']);
        $typeOfNL = $mysqli->real_escape_string($_POST['typeOfNL']);

   	  $stmt = $mysqli->prepare("UPDATE `newsletter` SET `Status` = '0' WHERE `ID` = ? AND `Status` = '1'");
   	  $stmt->bind_param("i",$NewsletterID);
   	  $stmt->execute();
        
        if($typeOfNL == "sent")
   	     header("location:sent_nl_list.php");
        else
           header("location:pending_nl_list.php");
   }
   else
   {
   	header("location:dashboard.php");
   }

?>