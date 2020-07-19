<?php include_once ('../includes/header.php')  ?>

<?php 

require_once 'db_conn.php';

if($_POST){
    $id = $_POST['id'];
    $title = $_POST['title'];
    $descrpt = $_POST['descrpt'];
    $mediastyle = $_POST['mediastyle'];

    $sql = "UPDATE media SET title='$title', descrpt='$descrpt', mediastyle='$mediastyle' WHERE Media_ID = $id ";

    if($connect->query($sql) === TRUE)
    {
        echo "succes <br> <a href='../home.php'>Back Home</a>";
    } else {
        echo "seriously error";
    }
}

$connect->close();

?>