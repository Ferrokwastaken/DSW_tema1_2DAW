<?php
    $filesDir = "files/";
    print "<h1>POST</h1><pre>";
    var_dump($_POST);
    print "</pre><h1>FILES</h1><pre>";
    var_dump($_FILES);
    print "</pre>";

    if ($_FILES['document']['error'] != 0) {
        echo "<h2>Ha habido un error</h2>";
    } else {
        // No hay error en la subida
        if ($_FILES['document']['type'] != 'application/pdf') {
            echo "<h2>Error, no es un .pdf</h2>";
        } else {
            if (move_uploaded_file($_FILES['document']['tmp_name'], $filesDir . $_FILES['document']['name'])) {
                echo "<p>Documento subido con éxito</p>";
                printf('<a href="%s">Ver documento</a>', $filesDir . $_FILES['document']['name']);
            } else {
                echo "<p>Error al copiar</p>";
            }
        }

    }
    
?>