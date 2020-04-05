<?php
$cuenta = 0;
while ($cuenta <= 4) {    // bucle de 5 iteraciones
    $cuenta++;
    // cuando cuenta alcanza 3, salta a la sig. iteración
    if ($cuenta == 3)  continue;
    echo "Esta es la iteración número $cuenta <br/>";
}
?>
