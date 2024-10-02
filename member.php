<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require 'header.php';?>
    
    <title>Members</title>
</head>

<body>
    <?php require 'nav.php';?>
    <?php
    require 'conn.php';
    $sql = "SELECT * FROM members";
    $result =$conn ->query($sql);
    if(!$result){
        die("Error : ".$conn->$conn_error);
    }
    
    ?>
    
    
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
      <h1 class="justify-between">Members</h1>
      <a href="insertmember.php" class="btn btn-outline-dark">INSERT</a>
    </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
    
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
               echo'<tr>
      <th scope="row">'.$row['member_id'].'</th>
      <td>'.$row['first_name'].' '.$row['last_name'].'</td>
      <td>'.$row['address'].'</td>
      <td>'.$row['phone_number'].'</td>
      <td><a href="editmember.php?member_id='.$row['member_id'].'" class="btn btn-sm btn-danger">Edit</a></td>
    </tr>';
            }
        }
        $conn->close();
        ?>
        
  </tbody>
</table>
        </div>
  </div>
    
</body>
<?php require 'script.php';?>
</html>