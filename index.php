<?php 
include('php_code.php'); 



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Build To Do List By Php and Mysql</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <div class="heading">
        <h2>To do List App Php and Mysql</h2>
    </div>
   
    <form method="post" action="index.php">
    
        <div class="input-group">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label >Task: </label>
            <input type="text" name="task" value="<?php echo $task; ?>" required  placeholder="Write Here Your Task" >
        </div>
        <div class="input-group">
            <label >Date: </label>
            <input type="date" value="<?php echo $T_Date; ?>" name="T_Date" required >
            <span class="validity"></span> </label> 
        </div>
        <div class="input-group">
        <?php if ($update == true): ?>
        <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
        <?php else: ?>
        <button class="btn" type="submit" name="save" >Save</button>
        <?php endif ?>
        </div>
       
       
    </form>
    <table>
        <thead>
            <tr>
                <th>N</th>
                <th>Task</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php 
                // LOOP TILL END OF DATA
                $i=1;
                while($rows=$taskList->fetch_assoc())
                { 
                    ?>
                    <tr>
                        <!-- FETCHING DATA FROM EACH
                            ROW OF EVERY COLUMN -->
                        <td><?php echo $i;?></td>
                        <td><?php echo $rows['task'];?></td>
                        <td><?php echo $rows['T_Date'];?></td>
                        <td class="delete">
                            <a href="index.php?del_task=<?php echo $rows['id'];  ?>" class="edit_btn" >X</a>
                            <a href="index.php?upd_task=<?php echo $rows['id']; ?>" class="del_btn">Edite</a></td>
                        
                        </td>
                    </tr>
                    
                    <?php
                    $i++;
                }
            ?>
        </tbody>
    </table>
    <div class="pagination">
        <a href="?page-n=1">Frist</a>
        <?php 
        if(!isset($_GET['page-n'])){
            ?> <a href="?page-n=2">Next</a>
            <?php
        }else{
            if($_GET['page-n'] >= $pages){
                ?>
                <a>Next</a> 
                <?php

            }
            else{
                ?>
                <a href="?page-n=<?php echo $_GET['page-n']+1 ?>">Next</a>
                <?php

            }
        }

        ?>

        <?php if(isset($_GET['page-n'])&& $_GET['page-n']>1) {  ?>
            <a href="?page-n=<?php echo $_GET['page-n']-1 ?>">Pervious</a>

            <?php

        }else{ ?> <a >Pervious</a> <?php }
        ?>
       
        
            <a href="?page-n=1">1</a>
            <a href="?page-n=2">2</a>
            <a href="?page-n=3">3</a>
            <a href="?page-n=4">4</a>
            <a href="?page-n=<?php echo $pages;?>">Last</a>
        
    </div>
    
</body>
</html>