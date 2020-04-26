<?php

//exemplo de uso
require_once 'Academia.php'; 

$a = new Academia();
$profe = $a->engadirProfesor("Laura", "Varela Ferreiro", '696999999','12345678A');
$profe->engadirBaile("SAMBA");
$profe->engadirBaile("HIP HOP");
$profe->engadirBaile("AFRO",12);
$profe->engadirBaile("AFRO",12);
echo '<br />PROFESOR: '. $profe->verInformacion();
echo '<br />SOLDO: '.$profe->calcularSoldo(10);
echo '<br />IMPARTE CLASE DE: '. $profe->getBailes();

$alu1 = $a->engadirAlumno("Uxia", "Loureiro Agra", "699666999");
echo '<br />ALUMNO: '. $alu1->verInformacion();
$alu1->setNumClases(2);
echo '<br />A PAGAR: '.$alu1->aPagar();

$alu2 = $a->engadirAlumno("Manuel", "Abel Prado", "699666999");
echo "<br/>ALUMNO: $alu2";
echo '<br />A PAGAR: '.$alu2->aPagar();


echo '<br />PROFESOR: '. $profe->verInformacion();
echo '<br />PROFESOR: '. $profe;
echo '<br />SOLDO: '.$profe->calcularSoldo(10);
$profe->eliminarBaile("AFRO");
echo '<br />IMPARTE CLASE DE: '. $profe->getBailes();

?>
