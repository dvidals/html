<?php
/*
Reemplace a primeira ocurrencia da cadea ‘este’ por ‘aquel”
Exemplo de entrada : 'este é un lapis estupendo' --> Exemplo de saída : ‘aquel é un lapis estupendo’
*/
$buscar='este';
$remplazo='aquel';
$cadena='este é un lapis estupendo';

echo str_replace($buscar,$remplazo,$cadena);


?>