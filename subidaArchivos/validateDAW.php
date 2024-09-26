<?php
    print_r($_POST);

    // if (!isset($_POST['name'])) {
    //     echo "<p>Falta el campo Nombre</p>";
    // }

    if (empty($_POST['name'])) {
        echo "<p>Campo nombre vacío</p>";
    }

    if (empty($_POST['surname'])) {
        echo "<p>El apellido no puede estar vacío</p>";
    }

    if (isset($_POST['surname']) && strlen($_POST['surname']) < 3) {
        echo "<p>El apellido no puede tener menos de 3 caracteres</p>";
    }

    if (empty($_POST['age'])) {
        echo "<p>La edad no puede estar vacía</p>";
    } elseif (!is_int($_POST['age'])) {
        echo "<p>La edad debe ser un número entero(1, 2, 3...)</p>";
    } else {
        $age = $_POST['age'];
        if ($age >= 18 && $age <= 99) {
            printf("Tu edad es %d", $_POST['age']);
        } else {
            echo "<p>La edad está fuera de rango</p>";
        }
    }
?>