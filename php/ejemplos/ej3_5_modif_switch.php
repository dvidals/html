<?php

$hoy = 'Martes';
switch ($hoy) { // múltiples alternativas:
    case 'Lunes':;
    case 'Martes':;
    case 'Miércoles':echo "hola<br>";
    case 'Jueves':echo "hola otra vez<br>";
    case 'Viernes': ;
        echo " Estamos en la jornada laboral";
        break;
    case 'Sábado':;
    case 'Domingo':
        echo 'Fin de semana';
        break;
}
?> 
