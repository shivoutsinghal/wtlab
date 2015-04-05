<?php
   $result = $mysqli->query("SELECT `ID` , `Subject`, `Body`, `DateTime` , `Status` FROM `newsletter` WHERE `Status`= '2' OR `Status` = '3' "); // 2 --> Sent , 1 --> Active , Not Send , 0 --> Deleted
   $tableBody = "";
   while($row = $result->fetch_array())
   {
   	  $subject = $row['Subject'];
   	  $body = $row['Body'];
   	  $DayCreated = $row['DateTime'];
      $newsletterID = $row['ID'];
      $Status = $row['Status'];

      if($Status == 2)
         $statusToDisplay = "Sent To all Subscribers";
        else
          $statusToDisplay = "In Process of Sending ...";

   	  $copyNewsletter = "<form action=\"nl_edit.php\" method='post'>
                            <input type='hidden' name='editIdNL' value=\"$newsletterID\" />
                            <input type='hidden' name='subject' value=\"$subject\" />
                            <input type='hidden' name='body' value=\"$body\" />
                             <input type='hidden' name='typeOfNL' value=\"sent\" />
                           <button class=\"btn btn-lime btn-alt btn-xs mr5 mb10\"> Copy </button>
                         </form>";
      $deleteNewsletter = "<form action='newsletter_delete.php' method='post' onsubmit='return confirm('You are going to remove this Newsletter. Press OK to proceed and Cancel to Go Back')'>
                               <input type='hidden' name='deleteIdNL' value=\"$newsletterID\" />
                               <input type='hidden' name='typeOfNL' value=\"sent\" />
                               <button class=\"btn btn-danger btn-alt btn-xs mr5 mb10\" ><i class =\"fa fa-fw fa-trash-o\"></i></button>
                              </form>";
     
        $tableBody .= "<tr>
                        <td>$subject</td>
                        <td>$body</td>
                        <td>$DayCreated</td>
                        <td>$statusToDisplay</td>
                        <td> $copyNewsletter
                             $deleteNewsletter
                         </td>
                        </tr>
                        ";

   }
    
?>