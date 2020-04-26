<?php

require_once 'Academia.php'; 

$a = new Academia();
$profe = $a->engadirProfesor("Eva", "Paz Pino", '696999999','12345678A',23);
$profe2 = $a->engadirProfesor("Xan","Pino Abel",'696444444','11111171B',32);
echo $profe->verInformacion() . $profe->comparar($profe2) . 
     $profe2->verInformacion()


?>
