<?php
	$cadena = "cadena de prueba";
	$palabras = explode(' ', $cadena);
	print_r($palabras);
	echo "<br>";
	$palabras = str_split($cadena);
	print_r($palabras);
	echo "<br>";
	$palabras = str_split($cadena, 5);	
	print_r($palabras);
	echo "<br>";
	/* recorrer el array con un foreach*/
	foreach($palabras as $palabra){
		echo $palabra . "<br>";
	}	
	foreach($palabras as $clave => $palabra){
		echo "$clave  $palabra <br>";
	}
	echo strtolower('dfsdsAAA');
	echo "<br>";
	echo strtoupper('dfsdsAAA');

