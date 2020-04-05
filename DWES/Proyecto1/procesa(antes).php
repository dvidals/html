<?php

$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$modulos=$_POST['modulos'];
$nModulo=1;
print "Tu nombre: ".$nombre."<br/>";
print "Tus apellidos: ".$apellidos."<br/>";
foreach ($modulos as $modulo){
    print "Modulo ".$nModulo.": ".$modulo."<br/>";
    $nModulo++;
}
?>
