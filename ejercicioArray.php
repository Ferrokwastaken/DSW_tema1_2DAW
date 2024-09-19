<?php
    $fruitArray = ['manzana', 'plátano', 'kiwi'];//1

    print_r($fruitArray);//2

    echo " Número de elementos" . count($fruitArray);//3

    $fruitArray[] = "naranja";//4
    //array_push($fruitArray, 'naranja');

    print_r($fruitArray);//5

    $fruitArrayCopy = $fruitArray;//6

    //7. no se modifica el array frutas porque es una copia

    echo in_array("papaya", $fruitArray) ? "está" : "no está ";//8
    $fruitArray[] = "papaya";//9
    echo in_array("papaya", $fruitArray) ? "está " : "no está";

    $position = array_search("manzana", $fruitArray);//10
    printf ("La posición de la manzana en el array es: $position \n");

    //unset($fruitArray[$position]);//11
    //$fruitArray = array_values($fruitArray);
    $apple = array_splice($fruitArray, $position, 1);//11
    print_r($fruitArray);
    print_r($apple);


    array_splice($fruitArray, 1, 0, $apple);//12
    print_r($fruitArray);

    sort($fruitArray);//13
    //asort($fruitArray);//en el caso que se desee mantener los mismos indices
    print_r($fruitArray);

    $fruitArray = array_reverse($fruitArray);//14
    print_r($fruitArray);

    $randomIndex = random_int(0, count($fruitArray) - 1);//15
    echo $fruitArray[$randomIndex];
    echo "\n";
    //echo $fruitArray[array_rand($fruitArray)];

    shuffle($fruitArray);//16
    print_r($fruitArray);

    $vegetableArray = ['berenjena', 'zanahoria', 'pimiento'];
    print_r($vegetableArray);//17

    $unitedArray = array_merge($fruitArray, $vegetableArray);
    print_r($unitedArray);//18
?>