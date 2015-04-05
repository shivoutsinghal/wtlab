<?php require_once 'initialise.php';?>
<?php
   $result = $mysqli->query("SELECT `Name` , `Email`, `DaySubscribed` FROM `subscriberinfo` WHERE `Status`= '1' "); 
   $tableBody = "";
   while($row = $result->fetch_array())
   {
   	  $Name = $row['Name'];
   	  $Email = $row['Email'];
   	  $DaySubscribed = $row['DaySubscribed'];
      
        $tableBody .= "<tr>
                        <td>$Name</td>
                        <td>$Email</td>
                        <td>$DaySubscribed</td>
                       </tr>
                        ";

   }
    
?>