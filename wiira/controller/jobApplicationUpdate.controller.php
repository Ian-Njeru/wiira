<?php

include "model/jobApplicationUpdate.php";
$jobApplicationUpdate = new jobApplicationUpdate;
if(isset($_POST["status"])){
    $data = array(
        "status"=>$_POST["status"],
        "wiira_id"=>$_POST["wiira_id"]
    );

    $result = $jobApplicationUpdate->updateApplicationStatus($data);
    
}

