<?php

$date = \DateTime::createFromFormat('d/m/Y','17/01/2020');
$today = new \DateTime();

echo 'Fecha: ' . $date->format('Y-m-d') . "<br/>";
echo 'Hoy: ' . $today->format('Y-m-d') . "<br/>";

$modificada = clone ($today);
$modificada->add(new \DateInterval('P1M6D'));
echo 'Dentro de 1 mes y 6 días: ' . $modificada->format('Y-m-d') . "<br/>";

$unMes = clone ($today);
$unMes->add(new \DateInterval('P1M'));
echo 'Dentro de 1 mes: ' . $unMes->format('Y-m-d') . "<br/>";
$treintaDias = clone ($today);
$treintaDias->add(new \DateInterval('P30D'));
echo 'Dentro de 30 días: ' . $treintaDias->format('Y-m-d') . "<br/>";

if ($unMes > $treintaDias) echo "Este mes tiene 31 días";