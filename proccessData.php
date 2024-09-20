<?php
    require_once('subjectData.php');
    require_once('companies.php');
?>
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
        Id:
        <?php echo $_GET['id']; ?>
    </p>
    <p>
        Nombre:
        <?php echo $_POST['name']; ?>
    </p>

    <p>
        Edad:
        <?php echo $_POST['age']; ?>
    </p>

    <p>
        Afición:
        <?php echo $_POST['hobby']; ?>
    </p>

    <?php if (isset($_POST['course'])) { ?>
        <p>
            Matriculado en el ciclo
            <?php echo $_POST['course']; ?>
        </p>
    <?php } ?>

    <p>
        Lado preferido:
        <?php echo $_POST['side']; ?>
    </p>

    <p>
        Módulo preferido:
        <?php echo $_POST['subject']; ?>
        <?php echo $subjects[$_POST['subject']]; ?>
    </p>

    <p>
        Compañía preferida
        <?php //echo $companies[$_POST['companiesId']]; ?>
        <?php print_r ($_POST['companiesId']); ?>

        <ul>
            <?php
                $companiesId = $_POST['companiesId'];
                foreach($companiesId as $id) {
                    printf('<li>%s</li>', $companies[$id]);
                }
            ?>
        </ul>
    </p>
</body>
</html>