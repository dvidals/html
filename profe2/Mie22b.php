<?php

class NoCuadraticaException extends Exception{};

function ec2grad(float $a, float $b, float $c): array {

    if (empty($a)) {
        if (empty($b)) throw new Exception("ERROR: La ecuación no es válida");
        throw new NoCuadraticaException("ECUACIÓN NO CUADRÁTICA. RESULTADO: x = " . -$c / $b);
    }

    if ( ($disc = $b ** 2 - 4 * $a * $c) < 0) throw new Exception("ERROR: La ecuación no tiene soluciones reales");

    $x1 = round((-$b + sqrt($disc)) / (2 * $a), 2);
    $x2 = round((-$b - sqrt($disc)) / (2 * $a), 2);

    return array($x1, $x2);
}
