<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require 'header.php';?>
    
    <title>Movies</title>
</head>

<body>
    <?php require 'nav.php';?>
    <?php
    require 'conn.php';
    $sql = "SELECT* FROM movies";
    $result =$conn ->query($sql);
    if(!$result){
        die("Error : ".$conn->$conn_error);

    }
    
    ?>
    
    
<div class="container">
    <div class="d-flex justify-content-between align-items-center"><h1 class="justify-between">Movies</h1><a href="insertmovie.php" class="btn btn-outline-dark">  INSERT</a></div>
    <div class="row">
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
               echo'<div class="col-md-4">
              <div class="card mb-4 shadow">
                
                <img class="card-img-top" src="https://media.discordapp.net/attachments/980494201634582598/1288302098349293568/image.png?ex=66f4b053&is=66f35ed3&hm=4593325e56a01a9ae082f4fd831d42dada4182f5f63ba935336e1293bbb0000b&=&format=webp&quality=lossless&width=275&height=350" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                  <p class="card-text fw-bold">'.$row['movie_id'].'. '.$row['title'].'</p>
                  <p class="card-text text-muted">'.$row['description'].'</p>
                  <div class="d-flex justify-content-between align-items-center">
                  <small class="text-muted">'.$row['time'].'</small>
                    <div class="btn-group">
                      
                      <button type="button" class="btn btn-sm btn-secondary" disabled>'.$row['date'].'</button>
                      <a href="editmovie.php?movie_id='.$row['movie_id'].'" class="btn btn-sm btn-outline-secondary">Edit</a>
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
    
</body>
<?php require 'script.php';?>
</html>