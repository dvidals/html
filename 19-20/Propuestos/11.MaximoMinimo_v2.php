<?php
/*
Escribe un programa que pida 10 números por teclado y que luego muestre los números introducidos junto con las palabras
“máximo” y “mínimo” al lado del máximo y del mínimo respectivamente.
Haz dos versiones: donde los 10 números se pidan como un String separado por comas y también con inputs separados.

Ambas versiones deben devolver un error si se han introducido menos de 4 números.

 */
$a=array();
if (is_numeric($_POST['num1']))$a[0]=$_POST["num1"];
if (is_numeric($_POST['num2']))$a[1]=$_POST["num2"];
if (is_numeric($_POST['num3']))$a[2]=$_POST["num3"];
if (is_numeric($_POST['num4']))$a[3]=$_POST["num4"];
if (is_numeric($_POST['num5']))$a[4]=$_POST["num5"];
if (is_numeric($_POST['num6']))$a[5]=$_POST["num6"];
if (is_numeric($_POST['num7']))$a[6]=$_POST["num7"];
if (is_numeric($_POST['num8']))$a[7]=$_POST["num8"];
if (is_numeric($_POST['num9']))$a[8]=$_POST["num9"];
if (is_numeric($_POST['num10']))$a[9]=$_POST["num10"];


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
