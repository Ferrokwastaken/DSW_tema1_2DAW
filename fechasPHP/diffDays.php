<?php
    function stringToDate(string $str): Datetime {
        $dateArray = explode('-', $str);
        return new Datetime($dateArray[0]. '/' . $dateArray[2]. '/' . $dateArray[3]);
    }

    function diffDays(string $dateString1, string $dateString2): int {
        $date1 = stringToDate($dateString1);
        $date2 = stringToDate($dateString2);
        //echo $date2->format('d-m-Y');
        $diff = $date1->diff($date2);
        // print_r($diff);
        return $diff->days;
    }

    echo diffDays('2024--09-25', '2024--12-25');
?>