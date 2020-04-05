<?php
/*
Escribe un programa que pida 10 números por teclado y que luego muestre los números introducidos junto con las palabras
“máximo” y “mínimo” al lado del máximo y del mínimo respectivamente.
 */
$n = $_POST['num'];
$a= explode (" ", $n);
//$a = array();  Con esta y la siguiente fila hice la prueba antes de crear el html.
//$a = array(19, 14, 23, 2, 69, 134, 18, 1, 9, 24);
function maxmin($a)
{
    if(count($a)<3 || count($a)>10) echo "Hay que escribir entre 3 y 10 números, ni más ni menos";
    else
    for ($i = 0; $i < count($a); $i++) {
        if ($a[$i] == max($a)) {
            echo $a[$i] . " máximo<br>";
        } elseif ($a[$i] == min($a)) {
            echo $a[$i] . " mínimo<br>";
        } else {
            echo $a[$i] . "<br>";
        }

    }
}

echo maxmin($a);
