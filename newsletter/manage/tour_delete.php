<?php require_once 'initialise.php' ; ?>
<?php
   if(isset($_POST['deleteIdTour']))
   {
   	  $TourID = $mysqli->real_escape_string($_POST['deleteIdTour']);
   	  $stmt = $mysqli->prepare("UPDATE `toursinfo` SET `Status` = '0' WHERE `ID` = ? AND `Status` = '1'");
   	  $stmt->bind_param("i",$TourID);
   	  $stmt->execute();

   	  header("location:tour_list.php");
   }
   else
   {
   	header("location:tour_list.php");
   }

?>