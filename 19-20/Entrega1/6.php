<?php
//Escribe un script para probar las funciones del cuadro 2.6.
$v=$_POST['v'];
$n=$_POST['variable'];
$c=$_POST['cadena'];
$cad=$_POST['cad'];
$a=explode(",",$_POST['a']);
$array=$_POST['array'];
$separador=$_POST['separador'];

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
echo "</br>";
if($cad==1) echo strlen($c);
if($cad==4)echo strcmp($c,$separador);
if($cad==5)echo strtolower($c);
if($cad==6)echo strtoupper($c);
if($cad==7)echo strstr($c,$separador);
echo "</br>";

if($array==1) var_dump(ksort($a));
if($array==2) var_dump(krsort($a));
if($array==3) echo sort($a);
if($array==4) var_dump(rsort($a));
if($array==5) echo array_values($a);
if($array==6) echo array_keys($a);
//if($array==7) echo array_key_exists($a,$cla);
if($array==8) echo count($a);

?>