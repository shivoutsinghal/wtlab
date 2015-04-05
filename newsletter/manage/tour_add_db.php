<?php require_once 'initialise.php' ; ?>
<?php
  date_default_timezone_set("Asia/Kolkata");
  if(isset($_POST['addTour']))
  {
  	if(isset($_POST['tourName'],$_POST['tourDescription'],$_POST['tourPackage'],$_POST['dayDuration'],$_POST['nightDuration'],$_POST['startDate']))
  	{
  		 $tourName = $mysqli->real_escape_string($_POST['tourName']);
  		 $tourDescription = $mysqli->real_escape_string($_POST['tourDescription']);
  		 $tourPackage = $mysqli->real_escape_string($_POST['tourPackage']);
  		 $dayDuration = $mysqli->real_escape_string($_POST['dayDuration']);
  		 $nightDuration = $mysqli->real_escape_string($_POST['nightDuration']);
  		 $dayStarted = $mysqli->real_escape_string($_POST['startDate']);
         $dayStarted = date("Y-m-d" , strtotime($dayStarted));
  		 $dayCreated = date("Y-m-d");
         $durationToEnter = $dayDuration . "D/" . $nightDuration . "N";

  		 $stmt = $mysqli->prepare("INSERT INTO `toursinfo`(`TourName`, `Description`, `DayCreated`, `Duration`, `Package`, `StartDate`) 
  		 	                       VALUES (?,?,?,?,?,?)");
  		 $stmt->bind_param("ssssss",$tourName,$tourDescription,$dayCreated,$durationToEnter,$tourPackage , $dayStarted );
  		 $stmt->execute();

  		 header("location:tour_list.php");
  	}
  	else
  	{
  		header("location:tour_add.php");

  	}
  		
  }
  else
  	header("location:dashboard.php");

  ?>