<?php

class getReplyStatus extends dbConnection{
    public function __construct(){
        parent::__construct();
    }

    public function getStatus(){
        $stmt = $this->connection->prepare("SELECT * FROM reply");

        $stmt->execute();

        $sql = $stmt->get_result();

        $result = $sql->fetch_all(MYSQLI_ASSOC);

        return $result;
    }
}