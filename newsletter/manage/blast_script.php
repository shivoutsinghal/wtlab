<?php

require_once "includes/connection.php";

 $sql2 = $mysqli->query("SELECT `ID` , `Subject` , `Body` FROM `newsletter` WHERE `Status` = '3'");
 if($sql2->num_rows <= 0)
 {  
 	$sql1 = $mysqli->query("SELECT `ID`, `Subject` , `Body` FROM `newsletter` WHERE `Status` = '1' ORDER BY `DateTime` ASC LIMIT 1");
	$row1 = $sql1->fetch_array();
	$SubjectNewsLetter = $row1['Subject'];
	$BodySubjectNewsletter = $row1['Body'];
	$NewsletterID = $row1['ID'];

	$mysqli->query("UPDATE `newsletter` SET `Status` = '3' WHERE `ID` = '$NewsletterID'");

 }
 else
 {
 	$row2 = $sql2->fetch_array();
	$SubjectNewsLetter = $row2['Subject'];
	$BodySubjectNewsletter = $row2['Body'];
	$NewsletterID = $row2['ID'];
 }



$sql = $mysqli->query("SELECT * FROM `subscriberinfo` 
	                   WHERE `ReceivedNewsletter`='0' 
	                   LIMIT 2");
$numRows = $sql->num_rows ; // Added for "End Campaign Check" at the bottom of this file
$mail_body = '';
while($row = $sql->fetch_array()){
	$id = $row["ID"];
	$email = $row["Email"];
	$name = $row["Name"];
	
	$mail_body = '<html>
					<body style="background-color:#CCC; color:#000; font-family: Arial, Helvetica, sans-serif; line-height:1.8em;">
					<h3><a href="http://localhost/~sukham/newsletter/home.php"> WhiteLeaf Newsletter
					</h3>
					<p>Hello ' . $name . ',</p>
					' . $BodySubjectNewsletter . '
					<hr>
					<p>To opt out of receiving this newsletter, <form method="post" action="http://localhost/newsletter/optout.php" >  <input type="hidden" name="e" value="'. $email . '" /> <input type="submit" value="Click Here"/> </form> and we will remove you from the listing immediately.</p>
					</body>
				 </html>';
   
    $headers  = "From:whiteleaf@trektours.com\r\n";
    $headers .= "Content-type: text/html\r\n";
    $to = "$email";

    $mail_result = mail($to, $SubjectNewsLetter, $mail_body, $headers);
	
	if ($mail_result) {
		$mysqli->query("UPDATE subscriberinfo SET ReceivedNewsletter='1' WHERE Email='$email' LIMIT 1");
	} 
	
}
?>
<?php

// all people in the database have been sent the newsletter for the current campaign
if ($numRows == 0) {
	 
	 $mysqli->query("UPDATE `newsletter` SET `Status` = '2' WHERE `ID` = '$NewsletterID'");
	 $subj = "Newsletter Campaign Has Ended";
	 $body = "The current newsletter campaign has ended. All have been sent the newsletter.";
     $hdr  = "From:whiteleaf@developphp.com\r\n";
     $hdr .= "Content-type: text/html\r\n";

     mail("grossyroot@gmail.com", $subj, $body, $hdr);
	
}
// End Check Section
?>