<?php

/*
 Realiza un programa que pida una hora por teclado y que muestre luego buenos días, buenas tardes o buenas noches según la hora. 
 Se utilizarán los tramos de 6 a 11, de 12 a 19 y de 20 a 5. respectivamente. 
 Sólo se tienen en cuenta las horas, los minutos no se deben introducir por teclado.

 */
$hora=22;
if($hora>=6 and $hora<=11) echo "¡Buenos días!";
elseif($hora>=12 and $hora<=19) echo "¡Buenas tardes!";
else echo "¡Buenas noches!";
?>
