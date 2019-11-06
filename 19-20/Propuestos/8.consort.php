<?php
# Escribe un programa que ordene números enteros introducidos por teclado.
$a=array(1,2,3,4,69,125,14,33,48,12);
function ordenar ($a){
    sort($a);

    return $a;
}

function mayoramenor($a){
    rsort($a);
    return $a;
}

var_dump(ordenar($a));
echo "<br>";
var_dump(mayoramenor($a));
echo "<br>";
print_r(ordenar($a));
?>