<?php
/*
Escribe un programa que pida 10 números por teclado y que luego muestre los números introducidos junto con las palabras
“máximo” y “mínimo” al lado del máximo y del mínimo respectivamente.
Haz dos versiones: donde los 10 números se pidan como un String separado por comas y también con inputs separados.

Ambas versiones deben devolver un error si se han introducido menos de 4 números.

 */
$n = $_POST['num'];
$a= explode (",", $n);
//$a = array();  Con esta y la siguiente fila hice la prueba antes de crear el html.
//$a = array(19, 14, 23, 2, 69, 134, 18, 1, 9, 24);
function maxmin($a)
{
    if(count($a)<4 || count($a)>10) echo "Hay que escribir entre 4 y 10 números, ni más ni menos";
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
