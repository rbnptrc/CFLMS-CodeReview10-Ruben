<?php 

require_once 'db_conn.php';

if ($_POST){
    $id = $_POST["id"];

    $sql = "DELETE FROM media WHERE Media_ID = ${id}" ;
    if($connect->query($sql) === TRUE){
        echo "<h3>deleted succes </h3><br> ";
        echo "<a href='../home.php'><button type='button'>Back to Home</button></a>";
    } else {
        echo "error: it did not happened";
    }

    $connect->close();
}

?>