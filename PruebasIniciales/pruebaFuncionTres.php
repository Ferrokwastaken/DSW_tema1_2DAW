<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Funcion 3</title>
</head>
<body>
    <ol>
    <?php
        //echo isPrime(7) ? "Es primo" : "No es primo";
        //print_r(primeList(2));
        foreach(primeList(2) as $primeNumbers) {
            echo "<li>$primeNumbers</li> \n";
        }
    ?>
    </ol>
</body>
</html>

<?php

    function isPrime($number) {
        for ($i = 2; $i < $number; $i++) { 
            if ($number % $i == 0) {
                return false;
            }
            return true;
        }
    }

    function primeList($start, $amount = 10): array {
        $list = [];
        while (count($list) < $amount) {
            if (isPrime($start)) {
                $list[] = $start;
            }
            $start++;
        }
        return $list;
    }
?>