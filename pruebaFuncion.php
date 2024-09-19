<?php
    function totalOddNumbers($start, $finish = 10): void {
        for ($i = $start; $i <= $finish; $i++) { 
            if ($i % 2 != 0) {
                echo "<li>$i</li> \n";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba funciones</title>
</head>
<body>
    <h1>Fuciones</h1>
        <ul>
            <?php            
                totalOddNumbers(1, 10);
            ?>
        </ul>
</body>
</html>