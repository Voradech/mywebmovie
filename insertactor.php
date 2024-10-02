<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require 'header.php';?>
    <title>Insert Actor</title>
</head>
<body>
<?php require 'nav.php';?>
    <?php
    require 'conn.php';

    if($_SERVER['REQUEST_METHOD']== 'POST'){  

        $sql_update="INSERT INTO actors(first_name,last_name,birthdate,nationality) VALUES ('$_POST[first_name]','$_POST[last_name]' ,'$_POST[birthdate]' ,'$_POST[nationality]')"; //'$_POST[movie_id]'
        $result= $conn->query($sql_update);
    if(!$result) {
        die("Error God Damn it : ". $conn->error);
    } else {

    
    header("location:actor.php");
        }
    }
    ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5 shadow-lg border p-4 rounded-4">
            <h1>Insert Actors</h1><br>
            <form action="insertactor.php" method="post" >
                <div class="mb-3">
                    <label for="first_name" class="form-label">first_name</label>
                    <input type="text" class="form-control" id="title" name="first_name">
                    
                </div>
                <div class="mb-3">
                    <label for="last_name" class="form-label">Last_name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name">
                </div>
                <div class="mb-3">
                    <label for="birthdate " class="form-label">Birthdate</label>
                    <input type="date" class="form-control" id="birthdate" name="birthdate">
                </div>
                <div class="mb-3">
                    <label for="nationality" class="form-label">Nation</label>
                    <input type="text" class="form-control" id="nationality" name="nationality">
                </div>
                <button type="submit" class="btn btn-lg btn-dark">Submit</button>
            </form>
            </div>
        </div>
    </div>

    
</body>
<?php require 'script.php';?>

</html>