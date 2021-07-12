<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        table,th,td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <a href="route/createTask.php"><input type=submit value= "add task"></a>
    <a href="route/updateTask.php"> <input type=submit value= "update task"></a>
    <a href="route/deleteTask.php"> <input type=submit value= "delete task"></a><br><br>
    <?Php include("queryDB/select_All.php"); ?>
</body>
</html>