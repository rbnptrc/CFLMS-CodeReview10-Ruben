
<?php 
error_reporting( ~E_DEPRECATED & ~E_NOTICE );

$localhost = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "cr10_ruben_biglibrary";

// create connection

$connect = new mysqli($localhost, $username, $password, $dbname);

// check connection

if($connect->connect_error) {
    die("connection failed: " . $connect->connect_error);
} else {
    //echo "Successfull conectd";
}

// sql to create table Publisher
/* $sql = "CREATE TABLE IF NOT EXISTS  `Publisher` (
    `Publisher_ID` int(11) NOT  NULL AUTO_INCREMENT,
    `P_name` varchar(30) NOT  NULL,
    `P_address` varchar(50) NOT  NULL,
    `P_size` ENUM ('Large', 'Medium', 'Small') NOT  NULL,
    PRIMARY KEY (`Publisher_ID`)
   )";
       if($connect->query($sql) === TRUE) {
        echo "Table created successfully"  . "\n";
     } else {
        echo  "Error creating table";
     }*/

// sql to create table Author
/* $sql = "CREATE TABLE IF NOT EXISTS  `Author` (
    `Author_ID` int(11) NOT  NULL AUTO_INCREMENT,
    `A_fname` varchar(30) NOT  NULL,
    `A_lname` varchar(30) NOT  NULL,
    PRIMARY KEY (`Author_ID`)
   )";
       if($connect->query($sql) === TRUE) {
        echo "Table Author created successfully"  . "\n";
     } else {
        echo  "Error creating table";
     }*/

  // sql to create table Media
/* $sql = "CREATE TABLE IF NOT EXISTS  `Media` (
    `Media_ID` int(11) NOT  NULL AUTO_INCREMENT,
    `image` varchar(30) NOT  NULL,
    `ISBN` varchar(30) NOT  NULL,
    `descrpt` varchar(30) NOT  NULL,
    `publish_date` DATE,
    `type` ENUM ('book', 'dvd', 'cd') NOT  NULL,
    `status` ENUM ('available', 'reserved') NOT  NULL,
    PRIMARY KEY (`Media_ID`)
   )";
       if($connect->query($sql) === TRUE) {
        echo "Table Media created successfully"  . "\n";
     } else {
        echo  "Error creating table";
     }*/

?>