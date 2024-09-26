<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario DAW</title>
</head>
<body>
    <h1>Formulario DAW</h1>
    <form action="validateDAW.php" method="post">
        <p>
            <input type="text" name="name" id="" placeholder="Nombre...">
        </p>

        <p>
            <input type="text" name="surname" placeholder="Apellidos...">
        </p>

        <p>
            <input type="email" name="email" placeholder="Email...">
        </p>

        <p>
            <input type="text" name="age" id="" placeholder="Edad...">
        </p>

        <p>
            Matriculación:
            <input type="checkbox" name="modules[]" id="DSW" value="DSW"><label for="DSW">Desarrollo en entorno Servidor</label>
            <input type="checkbox" name="modules[]" id="DEW" value="DEW"><label for="DEW">Desarrollo en entorno Cliente</label>
            <input type="checkbox" name="modules[]" id="DOR" value="DOR"><label for="DOR">Diseño de Interfaces Web</label>
            <input type="checkbox" name="modules[]" id="DPL" value="DPL"><label for="DPL">Despliegue de Aplicaciones Web</label>
        </p>

        <p>
            <button type="submit">Enviar</button>
        </p>
    </form>
</body>
</html>