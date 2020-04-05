<?php  // comprueba si la string está vacía
// NULL, FALSE, “”, ‘0’ o 0 (entero o real): vacía
$str = '';  // ojo, comillas simples
echo  empty($str)."<br>"; // salida: 1
$str = null; 
echo  empty($str)."<br>";  // salida: 1
$str = '0';    
echo  empty($str)."<br>"; // salida: 1 (una cadena con 0)
unset($str);
echo empty($str)."<br>";  // salida: 1
echo empty ($patricia);
?>


