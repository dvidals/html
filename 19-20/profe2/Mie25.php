<?php

function mostrarArray($array) {
    echo '(' . implode(", ", $array) . ')';
}

function filtroBajo($array, $limite) {
    $array = array_filter($array, "is_numeric");  // Filtrado de arrays no numericos

    // $out = array();
    // foreach ($array as $val) {
    //     if ($val < $limite) $out[] = $val;
    // }
    // return $out;

    foreach ($array as $key => $val) {
        if ($val > $limite) unset($array[$key]);
        //mostrarArray($array); echo "<br/>";
    }
    return $array;
}


$arrayTest = array(
    array('array' => array(1, 2, 3, 4, 5, 6, 7, 8, 9), 'limite' => 4),
    array('array' => array(1, -2, 3, -4, 5, -6, 7, -8, 9), 'limite' => -1),
    array('array' => array(1, 2, 3, 4.56778, 5, 6, 7, 8, 9.99999), 'limite' => 10),
    array('array' => array(1, "a", NULL, "3", 0, FALSE), 'limite' => 10),
    array('array' => array(), 'limite' => 2)
);

foreach ($arrayTest as $val) {
   mostrarArray($val['array']);
   echo ': ' . $val['limite'] . '  => ';
   mostrarArray(
        filtroBajo($val['array'], $val['limite']));
    echo '<br/>';
}
