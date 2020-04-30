<?php

require_once 'Academia.php'; 

$a = new Academia();
$profe = $a->engadirProfesor("Eva", "Paz Pino", '696999999','12345678A',23);
$profe2 = $a->engadirProfesor("Xan","Pino Abel",'696444444','11111171B',32);
echo $profe->verInformacion() . $profe->comparar($profe2) . $profe2->verInformacion();
echo "<br><br>";
echo $profe2.$profe2->comparar($profe).$profe;
echo "<br><br>";
echo $profe.$profe->comparar2($profe2).$profe2;
echo "<br><br>";
echo $profe2.$profe2->comparar2($profe).$profe;


?>
