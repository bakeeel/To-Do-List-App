<?php

session_start();
       

    // initialize variables
        $task = "";
        $T_Date = "";
        $id = 0;
        $update = false;
        $start_row=0;
        $rows_per_page=5;

    // Create connection
        $db = mysqli_connect('localhost','root','','todo');
   
        
    //insert Task
        $error="";
        if(isset( $_POST['save'])){
            $task=mysqli_real_escape_string($db,$_POST['task']);
            $T_Date=date('y-m-d',strtotime(mysqli_real_escape_string($db,$_POST['T_Date']))) ;
            if(empty($task &&$T_Date)){
                $error="You Must Fill Task Field";
            }else{
                mysqli_query($db,"INSERT into tasks (task,T_Date) values('$task','$T_Date')");
                //  echo '<scrpt> alert("Date Inserted "); </scrpt>';
                 $_SESSION['message'] = "Task saved"; 
                 header('location:index.php');
            }   
        } 
       
    //delet Task 
        if(isset($_GET['del_task'])){
    
            $id=$_GET['del_task'];
            mysqli_query($db,"DELETE from tasks where id=$id");
            $_SESSION['message'] = "Address deleted!"; 
            header('location:index.php');
        }
    //Update Task
        if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $task = $_POST['task'];
            $T_Date = $_POST['T_Date'];

            mysqli_query($db, "UPDATE tasks SET task='$task', T_Date='$T_Date' WHERE id=$id");
            $_SESSION['message'] = "Address updated!"; 
            header('location: index.php');
        }
     //Edit Task
        if (isset($_GET['upd_task'])) {
            $id = $_GET['upd_task'];
            $update = true;
            $record = mysqli_query($db, "SELECT * FROM tasks WHERE id=$id");

        if (mysqli_num_rows ($record) == 1 ) {
        
                $n = mysqli_fetch_array($record);
                $task = $n['task'];
                $T_Date = $n['T_Date'];
        }
    
        }
     //row per page
        $record=mysqli_query($db,"select * from tasks");
        $nr_row_record=$record->num_rows;
    //calculating the nu of page
        $pages= ceil($nr_row_record/$rows_per_page);
        if(isset($_GET['page-n'])){
            $page=$_GET['page-n']-1;
            $start_row=$page*$rows_per_page;
        }
         //get task
         $taskList=mysqli_query($db,"select * from tasks limit $start_row,$rows_per_page");

    
    
   
        ?>