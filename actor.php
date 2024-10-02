<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require 'header.php';?>
    <title>Actors</title>
</head>

<body>
    <?php require 'nav.php';
    ?>
    <?php
    require 'conn.php';
    $sql = "SELECT* FROM actors";
    $result =$conn ->query($sql);
    if(!$result){
        die("Error : ".$conn->$conn_error);

    }
    
    ?>
    
    
    <div class="container">
    <div class="d-flex justify-content-between align-items-center"><h1 class="justify-between">Actors</h1><a href="insertactor.php" class="btn btn-outline-dark">  INSERT</a></div>
    <div class="row">
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
               echo'<div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="https://media.discordapp.net/attachments/980494201634582598/1288270366199910502/miz2.jpg?ex=66f492c6&is=66f34146&hm=e9c493a9b5ebf53b7d9d512d895f244fcd00e026460afac425f3625df4da6d43&=&format=webp" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                
                  <p class="card-text">'.$row['actor_id'].'. '.$row['first_name'].' '.$row['last_name'].'</p>
                  <div class="d-flex justify-content-between align-items-center">
                  <small class="text-muted">Nation: '.$row['nationality'].'  Birthdate:'.$row['birthdate'].'</small>
                    <div class="btn-group">
                      
                      <a href="editactor.php?actor_id='.$row['actor_id'].'" class="btn btn-sm btn-outline-secondary">Edit</a>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div> ';
            }
       
        }
        $conn->close();
        ?>
            
        </div>
        </div>
        </div>
    
</body>
<?php require 'script.php';?>
</html>
