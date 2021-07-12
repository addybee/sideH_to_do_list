<?php 
require("../process/delete.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{ font: 14px sans-serif; background-color:white; }
        .wrapper{ width: 200px; padding: 20px; background-color:grey;} 
        span{color:red;}
    </style
</head>
<body>
    <fieldset class="wrapper">
        <h2>delete Task</h2>
        <form class = "container" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div>
                <label>Id</label><br>
                <input type="number" name="id" placeholder="enter id of task to be deleted"><br>
                <span>* <?php echo $idErr ?></span>
            </div><br>  
            <div>
                <input type="submit" name = "submit" value="delete"><br>
            </div>
        </form>
    </fieldset>
</body>
</html>