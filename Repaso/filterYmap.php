<?php

function impar ($n){
   return ($n & 1);
}

function par ($n){
    return (!($n & 1));
}

function cuadrado($n){
    $c=$n*$n;
    return $c;
}

$array1=array (8,9,13,6,14,2,91,4,3);
$array2=array (a=>2, b=>8, c=>3, d=>9, patata=>11);

var_dump (array_filter($array1,"impar"));
print_r(array_filter($array2,"impar"));
echo "</br>";
print_r(array_filter($array1,"par"));
var_dump(array_filter($array2,"par"));
print_r(array_map("cuadrado",$array1));
echo "</br>";
print_r(array_map("cuadrado",$array2));
?>
