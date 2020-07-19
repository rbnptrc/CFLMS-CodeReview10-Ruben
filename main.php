<?php require_once 'includes/header.php'  ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TBL</title>
</head>
<body>

<?php 
require_once 'actions/db_conn.php';


$sql = "SELECT * FROM tbl";
$result = $connect->query($sql);

if($result->num_rows == 0){
    echo "no result";
} elseif($result->num_rows == 1){
    $row = $result->fetch_assoc();
    $row["title"]. "
     ". $row["image"]. " 
     ". $row["mediastyle"]. "
      ". $row["author"]. " 
      <a href='showmore.php?id=".$value["id"]."'>Show More</a><br> 
      <a href='update.php?id=".$value["id"]."'>Update</a><br> 
      <a href='delete.php?id=".$value["id"]."'>Delete</a><br>";
} else {
    $rows = $result->fetch_all(MYSQLI_ASSOC);
    foreach ($rows as $key => $value) {
        
    echo '<div class ="container">
      <div class="col-sm-10 col-md-4 col-lg-3 mb-5">
                  <div class="card">
                  <div class="card-body">
                  <h5 class="card-title">' . $value["title"] . '</h5>
                  <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1415375471l/119073.jpg" class="card-img-top">
                          <p class="card-text">Description: ' . $value["descrpt"] . '</p>
                          <p class="card-text">Type: ' . $value["mediastyle"] . '</p>
                          <a href="showmore.php?id=' . $value["id"] . '" class="btn btn-primary">Show More</a>
                          <a href="update.php?id=' . $value["id"] . '" class="btn btn-warning">Update</a>
                          <a href="delete.php?id=' . $value["id"] . '" class="btn btn-danger">Delete</a>
                      </div>
                  </div>
              </div>
      </div>';
    }
}
?>


    
</body>
</html>

