<?php require_once 'initialise.php' ; ?>
<?php
  date_default_timezone_set("Asia/Kolkata");
  if(isset($_POST['editTour']))
  {
  	if(isset($_POST['tourID'], $_POST['tourName'],$_POST['tourDescription'],$_POST['tourPackage'],$_POST['dayDuration'],$_POST['nightDuration'],$_POST['startDate']))
  	{
  		 $tourName = $mysqli->real_escape_string($_POST['tourName']);
  		 $tourDescription = $mysqli->real_escape_string($_POST['tourDescription']);
  		 $tourPackage = $mysqli->real_escape_string($_POST['tourPackage']);
  		 $dayDuration = $mysqli->real_escape_string($_POST['dayDuration']);
  		 $nightDuration = $mysqli->real_escape_string($_POST['nightDuration']);
  		 $dayStarted = $mysqli->real_escape_string($_POST['startDate']);
       $dayStarted = date("Y-m-d" , strtotime($dayStarted));
       $tourID = $mysqli->real_escape_string($_POST['tourID']);
  	   $durationToEnter = $dayDuration . "D/" . $nightDuration . "N";

  		 $stmt = $mysqli->prepare("UPDATE `toursinfo` SET `TourName`= ?,`Description`= ?,`Duration`= ?,`Package`= ? , `StartDate`= ? WHERE `ID` = ?");
  		 $stmt->bind_param("sssssi",$tourName,$tourDescription,$durationToEnter,$tourPackage,$dayStarted,$tourID );
  		 $stmt->execute();

  		 header("location:tour_list.php");
  	}
  	else
  	{
        
  		header("location:tour_list.php");

  	}
  		
  }
  else
  	header("location:dashboard.php");

  ?>