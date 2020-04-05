<?php
$geometria=htmlspecialchars($_POST['forma']);
$plano=(float)htmlspecialchars($_POST['base']);
$alto=(float)htmlspecialchars($_POST['altura']);

if($geometria=='rectangulo')
        echo "El área de $geometria es ".$plano*$alto;
else echo "El área de $geometria es ". $plano *$alto * 0.5;

?>
