<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document received</title>
</head>
<style>
    p{
        color: <?=$_POST['chooseColor']?>;
        font-size: <?=$_POST['size']?>px;
    }
</style>
<body>
    <h1>Texto recibido</h1>
    <p>
        <?php
            echo $_POST['words'];
        ?>
    </p>

    <p>
    <?php 
        if (move_uploaded_file($_FILES['page']['tmp_name'], $_FILES['page']['name'])) {
        include($_FILES['page']['name']);
        }
    ?>
    </p>
</body>
</html>