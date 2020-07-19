<?php require_once 'includes/header.php'  ?>
<?php 
require_once 'actions/db_conn.php';

if ($_GET['id']){
    $id = $_GET['id'];

    $sql = "SELECT * FROM media WHERE Media_ID =$id";
    $result = $connect->query($sql);

    $row = $result->fetch_assoc();
    

}
$connect->close();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Media</title>
</head>
<body>


   <form action="actions/l_update.php" method="post">

      <input type="hidden" name="Media_ID" value="<?php echo $row['Media_ID'] ?>">

      <input type="text" name="title" value="<?php echo $row['title'] ?>">
      <input type="text" name="descrpt" value="<?php echo $row['descrpt'] ?>">
      <input type="text" name="mediastyle" value="<?php echo $row['mediastyle'] ?>">
      <button type="submit" class="btn btn-success">Submit</button>
   </form>


</body>
</html>
