<?php
$p = 10;
$q = 11;
$r = 11.3;
$s = 11;
echo ($q > $p)."<br>";  // cierto: muestra 1
echo ($q < $p)."<br>";  // falso: muestra cadena vacía
echo ($q >= $s)."<br>";  // cierto: muestra 1
echo ($r <= $s)."<br>";   // falso: muestra cadena vacía
echo ($q == $s)."<br>";  // cierto: muestra 1
echo ($q == $r)."<br>";   // falso: muestra cadena vacía
echo ($q = $r)."<br>";   // muestra el valor asignado: 11.3
echo ($a == 0)."<br>";  // muestra 1 ($a no está definida)
echo ($a === 0);  // error ($a no está definida)
//OPERADORES DE BITS
//operador Y	$a & $b
//operador O	$a | $b
//operador O Exclusiva	$a ^ $b
//negación	~$a
//desplazamiento de $n bits a la izquierda	$a >> $n
//desplazamiento de $n bits a la derecha	$a >> $n

?>

