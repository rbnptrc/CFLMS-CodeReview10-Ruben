<?php 
require_once 'actions/db_conn.php';

if ($_GET['id']){
    $id = $_GET['id'];

    $sql = "SELECT * FROM media WHERE Media_ID =$id";
    $result = $connect->query($sql); //same as mysqli($conn, $sql);

    $data = $result->fetch_assoc();

}
$connect->close();

?>

<?php require_once 'includes/header.php'  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>


   <form action="actions/l_update.php" method="post">

      <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
      <input type="text" name="title" value="<?php echo $data['title'] ?>">
      <input type="text" name="descrpt" value="<?php echo $data['descrpt'] ?>">
      <input type="text" name="mediastyle" value="<?php echo $data['mediastyle'] ?>">
      <input type="submit">
   </form>


</body>
</html>