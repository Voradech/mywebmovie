<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require 'header.php';?>
    <title>Insert Movie</title>
</head>
<body>
<?php require 'nav.php';?>
    <?php
    require 'conn.php';

    if($_SERVER['REQUEST_METHOD']== 'POST'){  

        $sql_update="INSERT INTO movies(title,description,time,date) VALUES ('$_POST[title]','$_POST[description]' ,'$_POST[time]' ,'$_POST[date]')"; //'$_POST[movie_id]'
        $result= $conn->query($sql_update);
    if(!$result) {
        die("Error God Damn it : ". $conn->error);
    } else {

    /* echo "Insert Success <br>"; */
    header("location:movie.php");
        }
    }
    ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5 shadow-lg border p-4 rounded-4">
                <h1>Insert Movies</h1><br>
                <form action="insertmovie.php" method="post">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="description" name="description">
                    </div>
                    <div class="mb-3">
                        <label for="time" class="form-label">Time</label>
                        <input type="text" class="form-control" id="time" name="time">
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" class="form-control" id="date" name="date">
                    </div>
                    <button type="submit" class="btn btn-dark btn-lg">Submit</button>
                </form>
            </div>
        </div>
    </div>

    
</body>
<?php require 'script.php';?>
</html>