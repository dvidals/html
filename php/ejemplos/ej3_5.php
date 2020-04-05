<?php
$hoy = 'Martes';
switch ($hoy) { // múltiples alternativas:
        case 'Lunes': 
    	echo 'El lunes es el primer día de la semana';
        	break;
        case 'Martes': 
    	echo 'El martes es el segundo día de la semana';
        	break;
        case 'Miércoles':     
 	echo 'El miércoles es el tercer día de la semana';
        	break;
        case 'Jueves': 
   	 echo 'El jueves es el cuarto día de la semana';
        	break;
        case 'Viernes': 
    	echo 'El viernes es el quinto día de la semana';
        	break;
        case 'Sábado': 
    	echo 'El sábado es el sexto día de la semana';
        	break;
        case ‘Domingo’: 
    	echo 'El domingo es el último día de la semana';
        	break;
        default:
    	echo 'Día no reconocido';
       	 break;
}
?> 
