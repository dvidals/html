<?php
/*
Comprobe se unha cadea está contida dentro doutra cadea
Exemplo de entrada : 'A galiña azul salta sobre o seu niño' --> Comprobas se conten a palabra ‘salta’

*/

$cadena=$_POST['cadena'];
$buscar=$_POST['buscar'];

function comprobar($cadena,$buscar){


if(strstr($cadena,$buscar)<>FALSE) echo"Contiene la palabra $buscar";
else echo "No contiene la palabra $buscar";

}

echo comprobar($cadena,$buscar);
?>