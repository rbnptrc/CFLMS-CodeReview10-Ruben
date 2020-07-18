<?php 

require_once 'db_conn.php';

if($_POST){
    $id = $_POST["ID"];

    $sql = "DELETE FROM tbl WHERE TBL_ID = $id" ;
    if($connect->query($sql) === TRUE){
        echo "deleted succes <br> <a href='../home.php'>Back to Home</a>";
    } else {
        echo "error: it did not happened";
    }

    $connect->close();
}

?>