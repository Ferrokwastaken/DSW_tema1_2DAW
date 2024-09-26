<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subida de archivos</title>
</head>
<body>
    <h1>Formulario de subida de archivo</h1>
    <form action="readFile.php" method="post" enctype="multipart/form-data">
        <p>Nombre:
            <input type="text" name="name">
        </p>

        <p>Archivo:
            <input type="hidden" name="max_file_size" value="200000">
            <input type="file" name="document" id="">
        </p>

        <p>
            <button type="submit">Enviar</button>
        </p>
    </form>
</body>
</html>