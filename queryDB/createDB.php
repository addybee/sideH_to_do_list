<?php
    $myDB="toDoDB";
    // connect to database
    require("connect.php");

    //creating a database
    $sql="CREATE DATABASE $myDB";
    if($conn->query($sql)===true){
        echo "<br>database successfully created"; 
    }else{
        echo "<br>Error creating database: ". $conn->error;
    }
    $conn->close();

?>
