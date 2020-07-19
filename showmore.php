<?php require_once 'includes/header.php'  ?>

<?php 
require_once 'actions/db_conn.php';

if ($_GET["id"]){
    $id = $_GET['id'];


    $sqlshow = "SELECT title, ISBN, descrpt, publish_date, mediastyle, `status` FROM media WHERE Media_ID = $id";
    $result = $connect->query($sqlshow);

    $connect->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delet Media</title>
    <style>
        <?php include 'style.css'; ?>
    </style>


</head>

<body>

<h1>Media Details</h1>
<?php
    if ($result->num_rows == 0) {
        echo " nothing here - but id appears in url";
    } elseif ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
           echo  "<ul class='list-group'>
               <li class='list-group-item'><b>Title:</b>  " .$row['title']."</li><br>
               <li class='list-group-item'><b>Published on:</b>  " .$row['publish_date']."</li><br>
               <li class='list-group-item'><b>Short descrpt:</b>  " .$row['descrpt']."</li><br>
               <li class='list-group-item'><b>ISBN nr:</b>  " .$row['ISBN']."</li><br>
               <li class='list-group-item'><b>Status:</b>  " .$row['status']."</li><br>
               <li class='list-group-item'><b>Media Type:</b>  ".$row['mediastyle']."</li><br><br>
           </ul>" ;
       
   } else  {
    $rows = $result->fetch_all(MYSQLI_ASSOC);
    foreach ($rows as $value) {
        echo  "<ul class='showmore'>
        <li class='list-group-item'> <b>Title:</b>  " .$value['title']."</li><br>
        <li class='list-group-item'> <b>Published on:</b>  " .$row['publish_date']."</li><br>
        <li class='list-group-item'> <b>Short descrpt:</b>  " .$value['descrpt']."</li><br>
        <li class='list-group-item'> <b>ISBN nr:</b>  " .$value['ISBN']."</li><br>
        <li class='list-group-item'> <b>Status:</b>  " .$value['status']."</li><br>
        <li class='list-group-item'> <b>Media Type:</b>  ".$value['mediastyle']."</li><br><br>
    </ul>" ;
    }
    
   }

?>
</body>
</html>