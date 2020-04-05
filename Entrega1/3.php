<?php
/*
Almacena la función anterior en el fichero matemáticas.php.
Crea un fichero que la incluya y la utilice
 */

$a = 2;
$b = 15;
$c = 6;

function SegundoGrado($a, $b, $c)
{

    $bandera = true; //cambiará a false cuando la solución no sea real (raíz negativa)
    $soluciones = array();

    if ($a == 0) {
        $soluciones[0] = round(-$c / $b, 5, PHP_ROUND_HALF_UP);
    } else {

        if ($b != 0 and $c != 0) {
            if ((($b * $b) - 4 * $a * $c) < 0) {
                $bandera = false;
            } else {
                $soluciones[] = round((-$b + sqrt(($b * $b) - 4 * $a * $c)) / 2 * $a, 5, PHP_ROUND_HALF_UP);
                $soluciones[] = round((-$b - sqrt(($b * $b) - 4 * $a * $c)) / 2 * $a, 5, PHP_ROUND_HALF_UP);

            }
        }

        if ($b == 0 and $c != 0) {
            if (($c / $a) > 0) {
                $bandera = false;
            } else {
                $soluciones[] = round(sqrt((-$c) / $a), 5, PHP_ROUND_HALF_UP);
                $soluciones[] = round(-sqrt((-$c) / $a), 5, PHP_ROUND_HALF_UP);
            }

        }

        if ($b != 0 and $c == 0) {
            $soluciones[0] = 0;
            $soluciones[1] = round(-$b / $a, 5, PHP_ROUND_HALF_UP);
        }

        if ($b == 0 and $c == 0) {
            $soluciones[0] = 0;
        }
    }

    if ($bandera) {
        var_dump($soluciones);
    } else {
         var_dump($bandera);
    }

}

echo SegundoGrado($a, $b, $c);
