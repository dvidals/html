<?php

$date = DateTime::createFromFormat('d/m/Y','17/01/2020'); //DateTime tiene un método estático llmado createFromFormat
$today = new DateTime(); //Devuelve un objeto DateTime
var_dump($today);

$today2= date('Y/m/d'); //devuelve directamente un string;
var_dump($today2);

echo 'Fecha: ' . $date->format('Y-m-d') . "<br/>";
echo 'Hoy: ' . $today->format('Y-m-d') . "<br/>";

$modificada = clone ($today);
$modificada->add(new DateInterval('P1M6D')); //se usa P delante "period" para fechas y T "time" para horas
echo 'Dentro de 1 mes y 6 días: ' . $modificada->format('Y-m-d') . "<br/>";

$unMes = clone ($today);
$unMes->add(new DateInterval('P1M')); //se utilizaría sub en vez de add para restar.
echo 'Dentro de 1 mes: ' . $unMes->format('Y-m-d') . "<br/>";
$treintaDias = clone ($today);
$treintaDias->add(new DateInterval('P30D'));
echo 'Dentro de 30 días: ' . $treintaDias->format('Y-m-d') . "<br/>";

if ($unMes > $treintaDias) echo "Este mes tiene 31 días";
else echo "Este mes tiene menos de 31 días";