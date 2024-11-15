<?php

class jobApplicationMedium extends dbConnection{

    public function __construct(){
        parent::__construct();
    }

    public function getApplicationMedium(){
        $stmt = $this->connection->prepare("SELECT * FROM application_medium");

        $stmt->execute();

        $query = $stmt->get_result();

        $result = $query->fetch_all(MYSQLI_ASSOC);

        return $result;
    }

}

?>