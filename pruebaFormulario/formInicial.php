<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Formulario</title>
</head>
<body>
    <h1>Prueba de formulario</h1>
    <form action="readForm.php" method="post" enctype="multipart/form-data">
        <p>
            <textarea name="words" id="">Texto</textarea>
        </p>

        <p>
            <label for="words">Elegir color de texto
                <input type="color" name="chooseColor" id="chooseColor">
            </label>
        </p>

        <p>
            <label for="">Tamaño de letra:
                <input type="range" name="size" id="" min="8" max="64">
            </label>
        </p>

        <p>
            <label for="">Documento
                <input type="file" name="page" id="">
            </label>
        </p>

        <p>
            <button type="submit">Enviar</button>
        </p>
    </form>
</body>
</html>