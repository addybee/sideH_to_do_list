<?php 
require("../process/create_update.php"); 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign Up</title>
        <style>
         body{ font: 14px sans-serif; background-color:white; }
         .wrapper{ width: 400px; padding: 20px; background-color:grey;} 
            span{color:red;}
        </style
    </head>
    <body>
    <fieldset class="wrapper">
            <h2>Update Task</h2>
            
            <p>Please update this form to create a task</p>

            <form class = "container" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div>
                    <label>Id</label><br>
                    <input type="number" name="id" placeholder="enter id of update task">
                    <span>* <?php echo $idErr ?></span>
                </div><br>
                
                <div>
                    <label>Task</label><br>
                    <input type="text" name="task">
                    <span>* <?php echo $taskErr ?></span>
                </div><br>

                <div>
                    <div>Status</div><br>
                    <input type="radio" name="status" value="completed">
                    <label>Completed</label><br>
                    <input type="radio" name="status" value="uncompleted">
                    <label> Uncompleted</label><br>
                    <span><?php echo $statusErr ?></span>
                </div><br>
                

                <div>
                    <div>Priority</div><br>
                    <input type="radio" name="priority" value="high">
                    <label>High</label><br>
                    <input type="radio" name="priority" value="medium">
                    <label>Medium</label><br>
                    <input type="radio" name="priority" value="low">
                    <label>Low</label><br>
                    <span><?php echo $priorityErr ?></span>
                </div><br>
                
                <div>
                    <label>Date</label><br>
                    <input type="date" name="date" >
                    <span><?php echo $dateErr ?></span>
                </div><br>

                <div>
                    <label> Note </label> <br>
                    <textarea name="note" rows="5" cols="40" ></textarea>
                </div><br> 

                <input type="submit" name = "submit" value="update"><br>
            </form>
            <p><?php echo $msg ;?> <br>click to  go to<a href="../home.php"> Home</a>.</p><br>
        </fieldset>
    </body>
</html>