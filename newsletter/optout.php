<?php
	require_once('includes/connection.php');
	$email=$_POST[e];
	$msg="Hello ".$name.",\n\tYou have successfully opted out. You will not receive more newsletters until you subscribe again.\n\nRegards,\nTeam White Leaf.";
	$sub="Unsubscription Mail";
	$headers = "From: singhal.shivam1994@gmail.com";
	$sql=$mysqli->query("update subscriberinfo set Status='0' where Email='$email'");
	mail($email,$sub,$msg,$headers);
	header("location:home.php");
?>