<?php

class jobApplicationUpdate extends dbConnection{
    public function __construct(){
        parent::__construct();
    }

    public $status;
    public $wiira_id;
    
    public function updateApplicationStatus($data){
        $stmt = $this->connection->prepare("UPDATE wiira_application SET status = ? WHERE wiira_id = ? ");

        $status = $data["status"];
        $wiira_id = $data["wiira_id"];

        $stmt->bind_param("si",$status, $wiira_id);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;
    }
}

?>