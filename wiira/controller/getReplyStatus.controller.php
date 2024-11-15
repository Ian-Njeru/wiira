<?php

include "model/getReplyStatus.php";

$getReplyStatus = new getReplyStatus;
$result = $getReplyStatus->getStatus();

if($result==true){
    foreach($result as $row){
        echo "<option value=".$row['reply_id'].">".$row['reply_status']."</option>";
    }
}