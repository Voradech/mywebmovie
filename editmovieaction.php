<?php
    require 'conn.php';

    if($_SERVER['REQUEST_METHOD']== 'POST'){  
        if(isset($_POST['title']) && isset($_POST['description']) && isset($_POST['time']) && isset($_POST['date']) && isset($_GET['movie_id'])){
            $sql_update="UPDATE movies SET title='$_POST[title]',description='$_POST[description]' ,time='$_POST[time]' ,date='$_POST[date]' WHERE movie_id='$_GET[movie_id]' ";
            $result= $conn->query($sql_update);
        
            if(!$result) {
                die("Error God Damn it : ". $conn->error);
            } else {
                header("location:movie.php");
            }
        } else {
            header("location:editmovie.php?movie_id=".$_GET['movie_id']."");
        }
    }
?>