<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProccesData PHP</title>
</head>
<body>
    <h1>Obteniendo los datos</h1>
    <p>
        Nombre:
        <?php echo $_POST['name']; ?>
    </p>

    <p>
        Edad:
        <?php echo $_POST['age']; ?>
    </p>
</body>
</html>