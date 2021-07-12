<?php
    $msg_out="";
    $myDB="toDoDB";
    //connect to sql database
    require("../queryDB/connect.php");
    $conn->select_db($myDB);
    //insert data into the table sql query
    $sql = "INSERT INTO tasks (task, status_t, priority_t, due_date, note)
    VALUES ('$task', '$status', '$priority', '$date', '$note')";
    
    //executing and testing the query
    if($conn->query($sql) != TRUE){
        $msg_out= "<br>Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>