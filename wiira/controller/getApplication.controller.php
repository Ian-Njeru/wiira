<?php

include "model/getApplication.php";
$getApplication = new getApplication;

$result = $getApplication->showApplication();
$appStatus = $getApplication->getStatus();

if($result){
    foreach( $result as $row){

        $wiira_id = $row['wiira_id'];
        $date = $row['date'];
        $role = $row['role'];
        $ref_number = $row['ref_number'];
        $company = $row['company'];
        $deadline = $row['deadline'];
        $application_medium = $row['application_medium'];
        $status = $row['status'];
        
        $reply_status = $row['reply_status'];
        echo "<tr>
                            <td>".$wiira_id."</td>
                            <td>".$date."</td>
                            <td>".$role."</td>
                            <td>".$ref_number."</td>
                            <td>".$company."</td>
                            <td>".$deadline."</td>
                            <td>".$application_medium."</td>
                            <td>
                                <form method=\"post\" action=\"".htmlspecialchars($_SERVER["PHP_SELF"])."\">
                                
                                <select id=\"status\" name=\"status\">";
                                if($appStatus == true){
                                    foreach($appStatus as $row){
                                        $reply_id = $row['reply_id'];
                                        echo "<option userId=\"".$wiira_id."\" value='".$reply_id."' ";   if($reply_id == $status ) { echo "selected";}echo ">".$row['reply_status']."</option>";
    
                                    }
                                }
                                echo "</select>
                                
                                               
                            
                            ";

                            echo "</form></td> </tr>";
    
    }
}