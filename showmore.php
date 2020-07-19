<?php require_once 'includes/header.php'  ?>

<?php 
require_once 'actions/db_conn.php';

if(isset($_GET['Media_ID'])){
    $id = $_GET['id'];


    $sqlshow = "SELECT title, ISBN, descrpt, publish_date, mediastyle, `status`, fk_Author FROM media INNER JOIN author ON media.fk_Author = author.A_fname";
    $result = $connect->query($sqlshow);


    if ($result->num_rows == 0) {
        echo " no result";
    } if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
           echo  "<tr>
               <td>" .$row['title']."</td>
               <td><img src= '" .$row['image']." ' width='150px'></td>
               <td>" .$row['A_fname'] . " " .$row['A_lname']."</td>
               <td>" .$row['descrpt']."</td>
               <td>" .$row['ISBN']."</td>
               <td>" .$row['status']."</td>
               <td>".$row['mediastyle']."</td>
           </tr>" ;
       
   } else  {
    $rows = $result->fetch_all(MYSQLI_ASSOC);
    foreach ($rows as $value) {
        echo  "<tr>
        <td>" .$value['title']."</td>
        <td><img src= '" .$value['image']." ' width='150px'></td>
        <td>" .$value['A_fname'] . " " .$value['A_lname']."</td>
        <td>" .$value['descrpt']."</td>
        <td>" .$value['ISBN']."</td>
        <td>" .$value['status']."</td>
        <td>".$value['mediastyle']."</td>
    </tr>" ;
    }
       #echo  "<tr><h3><center>No Data Avaliable</center></h3></tr>";
   }


}

   

?>