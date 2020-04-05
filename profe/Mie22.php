<?php

//class NotNumbersException extends Exception{}; // se usaría cuando no se declaran tipos
class NoCuadraticaException extends Exception{};

function ec2grad(float $a, float $b, float $c) // declarando tipos
//function ec2grad($a, $b, $c)
{
    // if (!is_numeric($a) || !is_numeric($b) || !is_numeric($b)) throw new NotNumbersException();

    if (empty($a)) { // Este caso no encaja en las especificaciones
        // y es un mal diseño tal como está pero lo aprovecho para ejemplificar una excepción con mensaje
        if (empty($b)) return FALSE;
        throw new NoCuadraticaException("ECUACIÓN NO CUADRÁTICA. RESULTADO: x = " . -$c / $b);
    }

    $disc = $b *$b - 4 * $a * $c;

    if ( $disc < 0) return FALSE;

    $x1 = round((-$b + sqrt($disc)) / (2 * $a), 2);
    $x2 = round((-$b - sqrt($disc)) / (2 * $a), 2);

    return array($x1, $x2);
}
