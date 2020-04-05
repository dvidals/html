<?php
//Escribe un script para probar las funciones del cuadro 2.6.
$v=$_POST['v'];
$n=$_POST['variable'];
$c=$_POST['cadena'];
$cad=$_POST['cad'];
if($n==1)var_dump (isset($v));
if($n==2) var_dump(is_null($v));
if($n==3) var_dump (empty($v));
if($n==4) var_dump (is_int($v));
if($n==5) var_dump(is_float($v));
if($n==6)var_dump(is_bool($v));
if($n==7)var_dump(is_array($v));
if($n==8)var_dump(intval($v));
if($n==9)var_dump(floatval($v));
if($n==10)var_dump(boolval($v));
if($n==11)var_dump(strval($v));

if($cad==1) echo strlen($c);
if($cad==2) echo explode($c,$separador);
if($cad==3)echo implode($separador,$a);
if($cad==4)echo strcmp($c1,$c2);
if($cad==5)echo strtolower($c);
if($cad==6)echo strtoupper($c);
if($cad==7)echo str($c1,$c2);
ksort($a);
krsort($a);
sort($a);
rsort($a);
array_values($a);
array_keys($a);
array_key_exists($a,$cla);
count($a);

?>