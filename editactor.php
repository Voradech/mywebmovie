<?php
    if(!isset($_GET['actor_id'])){
        header("location:actor.php");
    }
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require 'header.php';?>
    <title>Edit Actor</title>
</head>
<body>
<?php
    require 'nav.php';
    ?>
    <?php
    require 'conn.php';

    $sql = "SELECT * FROM actors WHERE actor_id='$_GET[actor_id]' ";
    $result =$conn ->query($sql);
    if(!$result){
        die("Error : ".$conn->$conn_error);
    }
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
               echo '<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5 shadow-lg border p-4 rounded-4">
            <h1 >Edit actor</h1>
                <form action="editactoraction.php?actor_id='.$_GET['actor_id'].'" method="post">
                    <div class="mb-3">
                        <label for="first_name" class="form-label">Firstname</label>
                        <input type="text" class="form-control" id="first_name" value="'.$row['first_name'].'" name="first_name">
                    </div>
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Lastname</label>
                        <input type="text" class="form-control" id="last_name" value="'.$row['last_name'].'" name="last_name">
                    </div>
                    <div class="mb-3">
                        <label for="birthdate" class="form-label">Birthdate</label>
                        <input type="date" class="form-control" id="birthdate" value="'.$row['birthdate'].'" name="birthdate">
                    </div>
                    <div class="mb-3">
                        <label for="nationality" class="form-label">Nationality</label>
                        <input type="text" class="form-control" id="nationality" value="'.$row['nationality'].'" name="nationality">
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