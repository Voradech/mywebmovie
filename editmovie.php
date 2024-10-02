<?php
    if(!isset($_GET['movie_id'])){
        header("location:movie.php");
    }
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require 'header.php';?>
    <title>Edit Movie</title>
</head>
<body>
<?php
    require 'nav.php';
    ?>
    <?php
    require 'conn.php';

    $sql = "SELECT * FROM movies WHERE movie_id='$_GET[movie_id]' ";
    $result =$conn ->query($sql);
    if(!$result){
        die("Error : ".$conn->$conn_error);
    }
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
               echo '<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5 shadow-lg border p-4 rounded-4">
            <h1 >Edit Movie</h1>
                <form action="editmovieaction.php?movie_id='.$_GET['movie_id'].'" method="post">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" value="'.$row['title'].'" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="description" value="'.$row['description'].'" name="description">
                    </div>
                    <div class="mb-3">
                        <label for="time" class="form-label">Time</label>
                        <input type="text" class="form-control" id="time" value="'.$row['time'].'" name="time">
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" class="form-control" id="date" value="'.$row['date'].'" name="date">
                    </div>
                    <input type="submit" class="btn btn-dark btn-lg">
                </form>
            </div>
        </div>
    </div>';
            }
        }
        $conn->close();
        ?>
</body>
<?php require 'script.php';?>
</html>