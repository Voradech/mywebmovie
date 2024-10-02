<?php
    require 'conn.php';

    if($_SERVER['REQUEST_METHOD']== 'POST'){  
        
        if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['address']) && isset($_POST['phone_number']) && isset($_GET['member_id'])){
            $sql_update="UPDATE members SET first_name='$_POST[first_name]',last_name='$_POST[last_name]' ,address='$_POST[address]' ,phone_number='$_POST[phone_number]' WHERE member_id='$_GET[member_id]' ";
            $result= $conn->query($sql_update);

            if(!$result) {
                die("Error God Damn it : ". $conn->error);
            } else {
                header("location:member.php");
            }
        } else {
            header("location:editmember.php?member_id=".$_GET['member_id']."");
        }
    }
?>