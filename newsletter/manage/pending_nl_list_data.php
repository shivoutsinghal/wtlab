<?php
   $result = $mysqli->query("SELECT `ID`, `Subject`, `Body`, `DateTime` FROM `newsletter` WHERE `Status`= '1'  "); // 2 --> Sent , 1 --> Active , Not Send , 0 --> Deleted
   $tableBody = "";
   while($row = $result->fetch_array())
   {
        $subject = $row['Subject'];
        $body = $row['Body'];
        $newsletterID = $row['ID'];
        $DayCreated = $row['DateTime'];

        $editNewsletter = "<form action=\"nl_edit.php\" method='post'>
                        <input type='hidden' name='editIdNL' value=\"$newsletterID\" />
                        <input type='hidden' name='subject' value=\"$subject\" />
                        <input type='hidden' name='body' value=\"$body\" />
                         <input type='hidden' name='typeOfNL' value=\"pending\" />
                        <button class=\"btn btn-lime btn-alt btn-xs mr5 mb10\"><i class =\"fa fa-fw fa-pencil\"></i></button>
                     </form>";
         $deleteNewsletter = "<form action='newsletter_delete.php' method='post' onsubmit='return confirm('You are going to remove this Newsletter. Press OK to proceed and Cancel to Go Back')'>
                           <input type='hidden' name='deleteIdNL' value=\"$newsletterID\" />
                            <input type='hidden' name='typeOfNL' value=\"pending\" />
                           <button class=\"btn btn-danger btn-alt btn-xs mr5 mb10\" ><i class =\"fa fa-fw fa-trash-o\"></i></button>
                        </form>";
     
        $tableBody .= "<tr>
                        <td>$subject</td>
                        <td>$body</td>
                        <td>$DayCreated</td>
                        <td> $editNewsletter
                             $deleteNewsletter
                         </td>
                        </tr>
                        ";

   }
    
?>