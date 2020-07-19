<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    require_once 'includes/header.php';
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Yours</title>
    <style>
        <?php include 'style.css'; ?>
    </style>


</head>

<body>

    <div class="container media-container">
        <h1 class="mediatitle">Add Media</h1>

        <form class="addmedia" action="actions/l_create.php" method="post">


            <input type="hidden" name="id" placeholder="id" />

            Title
            <input type="text" name="title" placeholder="The title" />

            ISBN
            <input type="text" name="ISBN" placeholder="ISBN" />

            Description
            <input type="text" name="descrpt" placeholder="Description" />


            <button type="submit" name="submit" class="btn btn-primary">Insert Media</button>
            <a href="home.php"><button type="button" class="btn btn-primary">Back</button></a>


        </form>
    </div>


</body>

</html>