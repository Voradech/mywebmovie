<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require 'header.php';?>
    <title>Insert Member</title>
</head>
<body>
<?php require 'nav.php';?>
    <?php
    require 'conn.php';

    if($_SERVER['REQUEST_METHOD']== 'POST'){  

        $sql_update="INSERT INTO members(first_name,last_name,address,phone_number) VALUES ('$_POST[first_name]','$_POST[last_name]' ,'$_POST[address]' ,'$_POST[phone_number]')";
        $result= $conn->query($sql_update);
    if(!$result) {
        die("Error God Damn it : ". $conn->error);
    } else {

    /* echo "Insert Success <br>"; */
    header("location:member.php");
        }
    }
    ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5 shadow-lg border p-4 rounded-4">
                <h1>Insert Member</h1><br>
                <form action="insertmember.php" method="post">
                    <div class="mb-3">
                        <label for="first_name" class="form-label">Firstname</label>
                        <input type="text" class="form-control" id="first_name" name="first_name">
                    </div>
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Lastname</label>
                        <input type="text" class="form-control" id="last_name" name="last_name">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address">
                    </div>
                    <div class="mb-3">
                        <label for="phone_number" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone_number" name="phone_number">
                    </div>
                    <button type="submit" class="btn btn-dark btn-lg">Submit</button>
                </form>
            </div>
        </div>
    </div>

    
</body>
<?php require 'script.php';?>
</html>