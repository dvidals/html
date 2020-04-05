<?php
$hoy = 'Martes';
switch ($hoy ) {
    case 'Lunes':;
    case  'Martes':;
    case  'Miércoles':;
    case 'Jueves': echo "hola<br>";
    case 'Viernes':;
    echo 'Hoy es jornada laboral';
        break;
    case  'Sábado':;
    case 'Domingo':;
    echo 'Hoy es fin de semana';
        break;
 default;
    echo 'Día no reconocido';
}
?>
