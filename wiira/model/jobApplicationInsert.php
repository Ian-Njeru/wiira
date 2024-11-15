<?php

class jobApplicationInsert extends dbConnection{
    public function __construct(){
        parent::__construct();
    }

    public function insertJobApplication($data){
        $stmt = $this->connection->prepare("INSERT INTO wiira_application (date, role,company, ref_number, application_medium, status, deadline) VALUES (?, ?, ?, ?, ?, ?, ?)");
        
        $date= $data["date"];
        $role= $data["role"];
        $company= $data["company"];
        $ref_number= $data["ref_number"];
        $application_medium= $data["application_medium"];
        $status= $data["status"];
        $deadline = $data["deadline"];
        $stmt->bind_param("sssssss",$date, $role, $company, $ref_number, $application_medium, $status, $deadline);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;
        
    }

    public function checkInsertJobApplicationStatus($data){
        $stmt = $this->connection->prepare("SELECT * FROM wiira_application WHERE company = ?");

        $company=$data['company'];

        $stmt->bind_param("s",$company);
        
        $stmt->execute();

		$result = $stmt->get_result();

        $appStatus = $result->fetch_all();

        return $appStatus;
    }
}