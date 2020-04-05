<?php            // múltiples alternativas con elseif
$hoy = 'Jueves';
if ($hoy == 'Lunes') {
    echo 'El lunes es el primer día de la semana';
} elseif ($hoy == 'Martes') {
    echo 'El martes es el segundo día de la semana';
} elseif ($hoy == 'Miércoles') {
    echo 'El miércoles es el tercer día de la semana';
} elseif ($hoy == 'Jueves') {
    echo 'El jueves es el cuarto día de la semana';
} elseif ($hoy == 'Viernes') {
    echo 'El viernes es el quinto día de la semana';
} elseif ($hoy == 'Sábado') {
    echo 'El sábado es el sexto día de la semana';
} elseif ($hoy == 'Domingo') {
    echo 'El domingo es el último día de la semana';
} else {
    echo 'Día no reconocido';
}
?>
