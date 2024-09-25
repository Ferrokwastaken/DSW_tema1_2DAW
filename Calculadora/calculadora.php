<?php
    function calculate($op1, $op2, $operator) {
        $result;
        switch ($operator) {
            case '+':
                $result = $op1 + $op2;
                break;
        
            case '-':
                $result = $op1 - $op2;
                break;
        
            case 'x':
                $result = $op1 * $op2;
                break;
        
            case '/':
                $result = $op1 / $op2;
                break;
                
            default:
                $result = $op1;
                break;
        }
        return $result;
    }

if (isset($_GET['op1']) && isset($_GET['op2']) && isset($_GET['operator'])) {
    $op1 = calculate($_GET['op1'], $_GET['op2'], $_GET['operator']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form action="calculadora.php" method="get">
        <p>
            <label for="">Operador 1:</label>
            <?php if (isset($op1)) { ?>                       
                <input type="number" name="op1" value="<?=$op1?>">
            <?php } else { ?>
                <input type="number" name="op1">
            <?php } ?>
        </p>

        <p>
            <label for="">Operador 2:</label>
            <input type="number" name="op2">
        </p>

        <p>
            <input type="submit" value="+" name="operator">
            <input type="submit" value="-" name="operator">
            <input type="submit" value="x" name="operator">
            <input type="submit" value="/" name="operator">
            <input type="submit" value="clear">
        </p>
    </form>
</body>
</html>