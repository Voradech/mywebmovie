<?php
    require 'conn.php';

    if($_SERVER['REQUEST_METHOD']== 'POST'){  
        
        if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['birthdate']) && isset($_POST['nationality']) && isset($_GET['actor_id'])){
            $sql_update="UPDATE actors SET first_name='$_POST[first_name]',last_name='$_POST[last_name]' ,birthdate='$_POST[birthdate]' ,nationality='$_POST[nationality]' WHERE actor_id='$_GET[actor_id]' ";
            $result= $conn->query($sql_update);
            
            if(!$result) {
                die("Error God Damn it : ". $conn->error);
            } else {

                header("location:actor.php");
            }
        } else {
            header("location:editactor.php?actor_id=".$_GET['actor_id']."");
        }
    }
?>