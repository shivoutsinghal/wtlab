<?php
   $result = $mysqli->query("SELECT `ID`,`TourName`, `Description`, `DayCreated`, `Duration`, `Package`, `Status`, `StartDate` 
   	                         FROM `toursinfo`
   	                         WHERE `Status` = '1' ");
   $tableBody = "";
   while($row = $result->fetch_array())
   {    
        $tourID = $row['ID'];
   	  $tourName = $row['TourName'];
   	  $Description = $row['Description'];
   	  $DayCreated = $row['DayCreated'];
   	  $Duration = $row['Duration'];
   	  $Package = $row['Package'];
   	
   	  $StartDate = $row['StartDate'];
        $DescriptionToDisplay = substr($Description, 0,80) . "...";

   	  
         $editTour = "<form action=\"tour_edit.php\" method='post'>
                        <input type='hidden' name='editIdTour' value=\"$tourID\" />
                        <input type='hidden' name='tourName' value=\"$tourName\" />
                        <input type='hidden' name='description' value=\"$Description\" />
                        <input type='hidden' name='startDate' value=\"$StartDate\" />
                        <input type='hidden' name='duration' value=\"$Duration\" />
                        <input type='hidden' name='package' value=\"$Package\" />
                        <button class=\"btn btn-lime btn-alt btn-xs mr5 mb10\"><i class =\"fa fa-fw fa-pencil\"></i></button>
                     </form>";
         $deleteTour = "<form action='tour_delete.php' method='post' onsubmit='return confirm('You are going to remove this Tour. Press OK to proceed and Cancel to Go Back')'>
                           <input type='hidden' name='deleteIdTour' value=\"$tourID\" />
                           <button class=\"btn btn-danger btn-alt btn-xs mr5 mb10\" ><i class =\"fa fa-fw fa-trash-o\"></i></button>
                        </form>";
   	 

   	  	$tableBody .= "<tr>
   	  	               <td>$tourName</td>
   	  	               <td>$DescriptionToDisplay</td>
   	  	               <td>$Duration</td>
   	  	               <td>$Package</td>
   	  	               <td>$StartDate</td>
   	  	               <td> $editTour 
                             $deleteTour
                        </td>
   	  	               </tr>
   	  	               ";

   }
    
?>