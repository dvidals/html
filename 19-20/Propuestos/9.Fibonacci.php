<?php

/*
 Escribe un programa que muestre los n primeros términos de la serie de Fibonacci. 
 * El primer término de la serie de Fibonacci es 0, el segundo es 1 y el resto se calcula sumando los dos anteriores,
 *  por lo que tendríamos que los términos son 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144… El número n se debe introducir por teclado.	

 */

function fibonacci ($n){
$a[0]=0;
$a[1]=1;
for ($i=2;$i<=$n;$i++){
    
    $a[$i]=$a[$i-2]+$a[$i-1];
    
    
}
echo implode ($a,", ");
}
echo fibonacci (13);
?>
