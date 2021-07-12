<?php
    $myDB="toDoDB";
    // connect to database
    require("connect.php");
    $conn->select_db($myDB);
    // create a  table sql query
    $sql="CREATE TABLE tasks(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        task VARCHAR(30) NOT NULL,
        status_t VARCHAR(30) NOT NULL,
        priority_t VARCHAR(50) NOT NULL,
        due_date DATE NOT NULL, 
        note TEXT)";
    //testing executed query
    if($conn->query($sql)===true){
        echo "<br>table successfully created"; 
    }else{
        echo "<br>Error creating table: ". $conn->error;
    }
    $conn->close();
?>