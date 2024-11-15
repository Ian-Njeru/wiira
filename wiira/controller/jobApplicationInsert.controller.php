<?php

include "model/jobApplicationInsert.php";
$jobApplicationInsert = new jobApplicationInsert;

if(isset($_POST["submit"])){
    $data=array("date"=>date('Y-m-d'),
                "role"=>ucwords($_POST["role"]), 
                "company"=>ucwords($_POST["company"]),
                "ref_number"=>$_POST["ref_number"],
                "application_medium"=>$_POST["application_medium"],
                "status"=>$_POST["status"],
                "deadline"=>$_POST["deadline"]);
    
    $result = $jobApplicationInsert->checkInsertJobApplicationStatus($data);

    if($result==true){
        echo "<script>alert('Record already exists')</script>";
    }else{

    $result = $jobApplicationInsert->insertJobApplication($data);
    
    if($result==true){
        echo"<script>alert('Record added successfully')</script>";
    }else{
        echo"<script>alert('Error')</script>";
    }

    }
}

