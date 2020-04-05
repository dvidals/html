
<?php

/*
 Cree un fichero PHP en el que se asignen los siguientes valores a una variable
$temporal: “Juan”; 3,14; false; 3; null. Muestre por pantalla el tipo que se le
asigna a la variable utilizando la función gettype().
 */

$temporal=array("Juan",3.14,false,3,null);
echo gettype($temporal)."<br>";

$temporal="Juan";
echo gettype($temporal)."<br>";
$temporal=3.14;
echo gettype($temporal)."<br>";
$temporal=false;
echo gettype($temporal)."<br>";
$temporal=3;
echo gettype($temporal)."<br>";
$temporal=null;
echo gettype($temporal)."<br>";


?>
