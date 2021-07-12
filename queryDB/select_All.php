<?php
    $myDB="toDoDB";
    $msg_out="";
    require("connect.php");
    //connect to dsatabase
    $conn->select_db($myDB);
    //query database
    $sql = "SELECT* FROM tasks ORDER BY id ASC ";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        echo "<table><tr><th>ID</th><th>TASK</th><th>STATUS</th><th>PRIORITY</th><th>DUE DATE</th>
        <th>NOTE</th></tr>";
        //output data of each row
        while($row=$result->fetch_assoc()){
            echo "<tr><td>".$row["id"]."</td><td>".$row["task"]."</td><td>".$row["status_t"]."</td>
            <td>".$row["priority_t"]."</td><td>".$row["due_date"]."</td><td>".$row["note"]."</td></tr>";
        }
        echo "</table>";
    }else{
        echo "No record is save";
    }
    $conn->close();
?>