<?php

require_once '../includes/header.php';
require_once 'db_conn.php';

if ($_POST){
    $title = $_POST['title'];
    $ISBN = $_POST['ISBN'];
    $descrpt = $_POST['descrpt'];


    $sql = "INSERT INTO media (title, ISBN, descrpt) VALUES ('$title', '$ISBN','$descrpt' )";
    if($connect->query($sql) === TRUE) {
        echo "New Record Successfully Created<br>";
        echo "<a href='../create.php'><button type='button'>Add More</button></a>";
        echo "<a href='../home.php'><button type='button'>Home</button></a>";
    } else {
        echo "Error something went wrong ";
    }
}
// Close connection
$connect->close();

?>

