<?php
/*
Escribe una función que reciba un array de números y un número, el límite.
La función tiene que devolver un nuevo array que contenga sólo los elementos
del array original menores que el límite.

*/

$array= array(23, 44, 58, 7,14, 33, 19, 89, 127, 45, 88, 111, 109, 79, 200, 55);
$lim=100;
function Menores ($array,$lim){
    $j=0;
    $a=array();
    for ($i=0;$i<count($array);$i++){
        if($array[$i]<$lim){
            $a[$j]=$array[$i];
            $j++;
        }
    }
    return $a;
}

var_dump(Menores ($array,$lim));

?>