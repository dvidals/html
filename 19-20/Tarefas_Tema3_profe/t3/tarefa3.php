<?php

//exemplo de uso da clase Articulo
require_once("Articulo.php"); 

$a1 = new Articulo(1, "linterna");  
$a2 = clone $a1;  
$a2->nome="manta";
$a2->precio=2.33;
echo $a1 . '<br />' . $a2 . '<br />';



echo $a1->precio??'precio no asignado' . '<br />';
echo $a2->precio??'precio no asignado' . '<br />';

echo $a ?? $a1->precio ?? NULL ?? 0 ?? 1;


?>