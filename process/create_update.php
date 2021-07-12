<?php
    //initializing variables
    $id= $task= $status= $priority= $date= $note= $msg="";
    $idErr= $taskErr= $statusErr= $priorityErr= $dateErr= $noteErr= $msgErr="";

    // Processing form data input
    if($_SERVER["REQUEST_METHOD"]=="POST"){

        //validate id
        if(empty($_POST["id"])){
            $idErr="";
        }else{
            $id= test_ip($_POST["id"]);
            if(!filter_var($id, FILTER_VALIDATE_INT)){
                $idErr= "only letter and white space are allowed! ";
            }
        }

        //validate task
        if(empty($_POST["task"])){
            $taskErr="first name required!";
            return;
        }else{
            $task= test_ip($_POST["task"]);
            if(!preg_match("/^[a-zA-Z\d\s]+$/", $task)){
                $taskErr= "only letter and white space are allowed! ";
            }
        }

        // VALIDATE status
        if(empty($_POST["status"])){
            $statusErr= "status is required!";
        }else{
            $status= test_ip($_POST["status"]);
        }

        // VALIDATE priority
        if(empty($_POST["priority"])){
            $priorityErr= "priority is required!";
        }else{
            $priority= test_ip($_POST["priority"]);
        }

        //validate date
        if(empty($_POST["date"])){
            $dateErr= "date required";
        }else{
            $date=test_ip($_POST["date"]);
            $date_arr=explode('-', $date);
            if(!checkdate($date_arr[0], $date_arr[1], $date_arr[2])){
                $date_Err= "invalid date";
            }
        }
        //validate note
        if(empty($_POST["note"])){
            $noteErr= "";
        }else{
            $note= test_ip($_POST["note"]);
            if(!preg_match("/^[a-zA-Z\d\s]+$/", $note)){
                $taskErr= "only letter and white space are allowed! ";
            }
        }

        //inserting/updating form data to data base
        if(empty($idErr) && empty($taskErr) && empty($statusErr) && empty($priorityErr) && empty($dateErr)){

            //check if id is already in data base
            $myDB="toDoDB";

            //connect to sql database
            require("../queryDB/connect.php");
            $conn->select_db($myDB);
            $sql = "SELECT* FROM tasks WHERE id = '$id' ";
            $result = $conn->query($sql);
            $conn->close();
            // if id exist in database update the database
            if($result->num_rows > 0){
                include("../queryDB/update.php");
                $msgErr=$msg_out;

                //testing the result of the created/updated data and redirecting to home page
                msg($msgErr);
            }else{

                //insert data into the database
                require("../queryDB/insert.php");
                $msgErr=$msg_out;
                
                //testing the result of the created/updated data and redirecting to home page
                msg($msgErr);            
            }
        }else{
            $msg= "Oops! Something went wrong. Please try again later.";
        }
    }

    
    function msg($info){
        if(empty($info)){
            // Redirect user to Home page
            echo "<script> location.href='../home.php'; </script>";
            exit();
        }
    }
    //this function trims, strip slashes and and convert data to special html characters
    function test_ip($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>