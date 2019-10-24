<?php
/*
Elimina os 0’s a esquerda
Exemplo de entrada : '000327023.24'
Exemplo de saída : '327023.24'
*/

$entrada="0000327023.24";
$entrada2=str_split($entrada);
$i=0;
while( $entrada2[$i]==0){
    $entrada2[$i]="";
    $i++;
}

//print_r($entrada2);
$entrada2=implode("", $entrada2);
echo "El número $entrada sin ceros a la izquierda nos da $entrada2 <br>";


//Otra forma:
    echo "otra forma sería utilizando la función floatval()";
    $float = floatval($entrada);
    echo ". En este caso también $entrada pasa de cadena de texto al número $float";
?>