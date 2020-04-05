<?php
$cuenta = 0;
// bucle de 5 iteraciones
while ($cuenta <= 4) {
    $cuenta++;
    // cuando cuenta alcanza 3, sale del bucle
    if ($cuenta == 3) {
        break;      // break debe evitarse en bucles 
    }
    echo "Esta es la iteración número $cuenta <br/>";
}
?>
