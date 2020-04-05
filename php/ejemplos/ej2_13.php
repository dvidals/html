<?php
// define variables
$precio = 100;
$tam = 18;
echo ($precio > 50 && $tam < 25);  // muestra 1
echo ($precio > 150 || $tam > 75);  // no muestra nada
echo !($tam > 10);   // falso: no muestra nada
?> 
