<?php

class dbConnection{
    private $host="localhost";
    private $username="root";
    private $password="";

    private $database="wiira";

    protected $connection;

    public function __construct(){
        if(!isset($this->connection)){
            $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

            if(!$this->connection){
                echo "Cannot connect to database";
                exit;
            }

        }

        return $this->connection;
    }
}

class jobApplicationUpdate extends dbConnection{
    public $status;
    public $wiira_id;

    public function __construct(){
        parent::__construct();
    }

    
    
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

$jobApplicationUpdate = new jobApplicationUpdate;
if(isset($_POST["status"])){
    $data = array(
        "status"=>$_POST["status"],
        "wiira_id"=>$_POST["wiira_id"]
    );

    $response = $jobApplicationUpdate->updateApplicationStatus($data); 
}



?>