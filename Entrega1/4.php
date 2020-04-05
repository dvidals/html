<?php
//Escribe una función que reciba una cadena y comprueba si es u palíndromo.
$cadena = "solelos";
function Palindroma($cadena)
{
    $a = str_split($cadena);
    for ($i = 0; $i < count($a); $i++) {
        if ($a[$i] != $a[count($a) - 1 - $i]) return false ;
    }
        
    return true;
    
}
//
If (Palindroma($cadena)==false) echo "$cadena no es palíndroma";
else echo "$cadena es palíndroma";

echo "<br><br>";

// otra forma:
    function Palindroma2($cadena)
{
    $a = str_split($cadena);
    $bandera = true;
    for ($i = 0; $i < count($a); $i++) {
        if ($a[$i] == $a[count($a) - 1 - $i]);
        else $bandera=false;
    }
        if ($bandera)  echo "$cadena es palíndroma";
        else  echo "$cadena no es palíndroma";
    
}
echo Palindroma2($cadena);
