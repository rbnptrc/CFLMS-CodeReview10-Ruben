<?php require_once 'includes/header.php'  ?>

<?php 

require_once 'actions/db_conn.php';

if ($_GET["ID"]) {
   $id = $_GET["ID"];

   $sql = "SELECT * FROM tbl WHERE TBL_ID = $id" ;
   $result = $connect->query($sql);
   $row = $result->fetch_assoc();


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

    <div class="container media-container">
        <h1 class="mediatitle">Do You Want to Delete this Media</h1>

        <form action="actions/l_delete.php" method="post">


            <input type="hidden" name="ID" placeholder="ID" value="<?= $row['TBL_ID'] ?>"/>


            <button type="submit" class="btn btn-primary">Delete Media</button>
            <a href="home.php"><button type="button" class="btn btn-primary">Back</button></a>


        </form>
    </div>


</body>
</html>
