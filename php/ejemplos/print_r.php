<?php

$dias_semana=array ('Lunes','Martes','Miércoles','Jueves','Viernes','Sábado','Domingo');
$dias_semana[25]="Festivo";
echo print_r($dias_semana)."<br>Hola a todos<br>";
$numero_dias=count($dias_semana);
echo count($dias_semana)."<br>";
echo $numero_dias."<br>";
//$a="hola amigo";
//echo count_chars($a);
echo $dias_semana[1]."<br>";
//$fin_semana[5]="Sábado";
//$fin_semana[6]="Domingo";
$fin_semana=array(5=>"Sábado",6=>'Domingo');
echo "<br>".$fin_semana[5]."<br>".$fin_semana[6];
//Hay arrays numéricos, asociativos(strings) y mixtos
$fin_semana=array(5=>"Sábado","Su"=>'Domingo');
echo "<br>".$fin_semana[5]."<br>".$fin_semana["Su"];
$fin_semana=array(5=>"Sábado","Su"=>'Domingo');
echo "<br>".$fin_semana[5]."<br>".$fin_semana["SU"];
?>
