<?php

//números impares que hay entre dos valores
function impares($inicio,$fin)
{
$i=$inicio;
while($i<$fin)  
	{  
	if(($i%2)==0)  
		{  
		$i++;  
		continue;  
	}  
	else  
		{  
		echo $i.'<br>';  
		$i++;  
		}  
	}
}
//elegimos de intervalo los números 1 y 20.
$inicio=1;
$fin=20;
impares($inicio,$fin);

/*
Inicializamos una variable $i con valor 1.
Ejecutamos un bucle while dónde el valor de la variable $i sea menor de 20.
Con if() detectamos si el valor de la variable $i dividido entre 2 tiene resto 0. En caso afirmativo aumentamos su valor en 1 y con continue volvemos al comienzo del while.
En el ‘else’ mostramos con echo el número impar.
*/
?>

