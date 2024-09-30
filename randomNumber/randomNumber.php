<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Number from 1-6</title>
</head>
<body>
    <h1>Número aleatorio del 1 al 6</h1>
    <?php
        $randomNumber = random_int(1, 6);
        printf('<img src="sides/dice%d.png" alt="%d"/>', $randomNumber, $randomNumber);
    ?>
</body>
</html>