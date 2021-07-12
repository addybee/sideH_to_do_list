<?php
    $id= $idErr="";
    // Processing form data input
    if($_SERVER["REQUEST_METHOD"]=="POST"){

        //validate id
        if(empty($_POST["id"])){
            $idErr="required";
        }else{
            $id= test_ip($_POST["id"]);
            
            if(!filter_var($id, FILTER_VALIDATE_INT)){
                $idErr= "only letter and white space are allowed! ";
            }
            //check if id is already in data base
            $myDB="toDoDB";

            //connect to sql database
            require("../queryDB/connect.php");
            $conn->select_db($myDB);
            $sql = "SELECT* FROM tasks WHERE id = '$id' ";
            $result = $conn->query($sql);
            $conn->close();
            if($result->num_rows<1){
                $idErr="invalid id";
            }
        }
        
        //deleting data from data base
        if(empty($idErr)){
            include("../queryDB/delete.php");
            $msg=$msg_out;
            msg($msg);

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