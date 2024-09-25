<?php
    $op1 = $_GET['op1'];
    $op2 = $_GET['op2'];

    $operator = $_GET['operator'];

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

    echo calculate($_GET['op1'], $_GET['op2'], $_GET['operator']);
?>