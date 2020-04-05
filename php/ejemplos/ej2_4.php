<?php
// asigna valor a la variable
$coche = 'Ferrari';
// muestra el valor de la variable
// salida: 'Antes de unset(), mi coche es un Ferrari'
echo "Antes de unset(), mi coche es un $coche<br>";
// asigna valor vacío (null) a la variable
unset($coche);
// muestra el valor de la variable
// salida: 'Tras unset(), mi coche es un '
echo "Tras unset(), mi coche es un $coche";
?>
