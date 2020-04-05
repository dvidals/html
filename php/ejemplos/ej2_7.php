<?php
$nombre = 'Sara';
echo gettype($nombre)."<br>";  	// salida: 'string'
$nombre = 99.8; 		// asigna nuevo valor
echo gettype($nombre)."<br>"; 	// salida: 'double'
unset($nombre);		 // destruye la variable
echo gettype($nombre); 	// salida: 'NULL'
?>

