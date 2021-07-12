<?php
    $myDB="toDoDB";
    $msg_out="";
    require("connect.php");
    //connect to dsatabase
    $conn->select_db($myDB);
     // sql to delete a record
    $sql = "DELETE FROM tasks WHERE id=$id";

    if ($conn->query($sql) != TRUE) {
        $msg_out= "Error deleting record: " . $conn->error;
    }
    $conn->close();
?>