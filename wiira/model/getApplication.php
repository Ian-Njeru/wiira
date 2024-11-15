<?php

class getApplication extends dbConnection{
    public function __construct(){
        parent::__construct();
    }

    public function showApplication(){
        $stmt = $this->connection->prepare("SELECT * FROM wiira_application wa INNER JOIN application_medium am ON wa.application_medium = am.application_medium_id INNER JOIN reply r ON  wa.status= r.reply_id");
        
        $stmt->execute();

        $sql = $stmt->get_result();

        $result = $sql->fetch_all(MYSQLI_ASSOC);
        
        return $result;
    }

    public function getStatus(){
        $stmt = $this->connection->prepare("SELECT * FROM reply");

        $stmt->execute();

        $sql = $stmt->get_result();

        $result = $sql->fetch_all(MYSQLI_ASSOC);

        return $result;
    }
}