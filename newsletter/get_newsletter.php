<?php
	require_once('includes/connection.php');
?>
<?php
	$subject = $_POST['subject'];
	$sql = $mysqli->query("SELECT `Body` FROM `newsletter` WHERE `Subject` = '$subject' ");
	while($row = $sql->fetch_array()){
		echo $row['Body'];
	}
?>