<?php

/*
 Escribe un programa en que dado un número del 1 a 7 escriba el correspondiente nombre del día de la semana.

 */
$n=9;
switch ($n){
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miércoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    case 6:
        echo "Sábado";
        break;
    case 7:
        echo "Domingo";
        break;
    default:
        echo "Sólo son válidos los números del 1 al 7";
}
?>
