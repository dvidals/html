<?php

function suma($a, $b) {
    return $a + $b;
}

echo suma(4, 8) . '<br>';
$var1 = 35;
$var2 = 5;
$var3 = suma($var1, $var2);
echo "Valor de var3 " . $var3 . '<br>';

function suma1(&$var1, $var2) {
    //Si queremos modificar el valor de una variable y que el resultado sea recogido
    //hay que pasarla con &
    $var1 += $var2;
}

suma1($var1, $var2);
echo 'Valor de $var1 ' . $var1 . '<br>';
echo "Vamos a pararnos en este punto";
?>