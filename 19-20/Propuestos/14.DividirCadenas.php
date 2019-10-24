<?php
/*
Divida a cadea separando por dous puntos (o que puidera ser un formato hh:mm:ss)
Exemplo de entrada : '092402' -->     Exemplo de saída : 09:24:02

*/

/*
$entrada="090114";
$fecha=strtotime($entrada);
var_dump($fecha);
echo"<br>";
$fechanew=date_format($fecha,"H:m:s");
echo $fechanew;
*/

$entrada="090114";
$entradanew=substr($entrada,0,2).":".substr($entrada,2,2).":".substr($entrada,-2);
echo $entradanew;
?>