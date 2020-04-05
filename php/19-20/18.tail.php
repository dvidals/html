<?php
/*Obteña os tres últimos caracteres dunha cadea:
Exemplo de entrada : 'jose@exemplo.gal' --> Exemplo de saída : 'gal' */

//$cadena='jose@exemplo.gal';
$cadena=$_POST['cadena'];
$cola=$_POST['cola'];

echo substr($cadena,-$cola);

?>