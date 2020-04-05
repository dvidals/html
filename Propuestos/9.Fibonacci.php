<?php

/*
 Escribe un programa que muestre los n primeros términos de la serie de Fibonacci.
 El primer término de la serie de Fibonacci es 0, el segundo es 1 y el resto se calcula sumando los dos anteriores, 
 por lo que tendríamos que los términos son 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144… 
 El número n se debe introducir por teclado.	

 */
$f=array(0,1);
$n=20;

for ($i=2;$i<=$n;$i++){
    $f[$i]=$f[$i-1]+$f[$i-2];
}
$f=implode(",",$f);
print_r($f);

?>
