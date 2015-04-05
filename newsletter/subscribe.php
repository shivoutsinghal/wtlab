<?php
	require_once('includes/connection.php');
    $name=$_POST[name];
	$email=$_POST[email];
	$daySubscribed=date("Y-m-d h:i:s");
	$msg="Hello ".$name.",\n\tWelcome..! Thank you for subscribing. You will now receive our Newsletters.\n\nRegards,\nTeam White Leaf.";
	$msg1="Hello ".$name.",\n\tWelcome Back..! Thank you for subscribing again. You will now receive our Newsletters.\n\nRegards,\nTeam White Leaf.";
	$sub="Welcome User";
	$headers = "From: singhal.shivam1994@gmail.com";
	$sql=$mysqli->query("select * from subscriberinfo where Email='$email' ");
	$cnt=$sql->num_rows;
	if($cnt!=0){
		while($row=$sql->fetch_array()){
			$status=$row['Status'];
			if($status==0){
				$mysqli->query("update subscriberinfo set Status='1' where Email='$email'");
				mail($email,$sub,$msg1,$headers);
				header("location:home.php?x=3");
			}
			else{
				header("location:home.php?x=2");
			}
		}
	}
	else{
		$mysqli->query("insert into subscriberinfo (Name,Email,DaySubscribed) values('$name','$email','$daySubscribed')");
		mail($email,$sub,$msg,$headers);
		header("location:home.php?x=1");
	}
?>