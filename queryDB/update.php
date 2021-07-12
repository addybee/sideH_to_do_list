<?php
    $msg_out="";
    $myDB="toDoDB";
    include("connect.php");
    $conn->select_db($myDB);
    $query="UPDATE tasks SET task='$task', status_t='$status', priority_t='$priority',
    due_date='$date', note='$note' WHERE id='$id'";
    if($conn->query($query)!=TRUE){
        $msg_out=("Error updating record: " . $conn->error);
    }
    $conn->close();
?>