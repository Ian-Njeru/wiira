<?php
    include "model/getApplicationMedium.php";
    $jobApplicationMedium = new jobApplicationMedium;
    $result = $jobApplicationMedium->getApplicationMedium();

    if($result==true){
        foreach($result as $row){
            echo "<option value=".$row['application_medium_id'].">".$row['application_medium']."</option>";
        }
    }
?>