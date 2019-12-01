<!-- 
9. Escribe un programa que muestre los n primeros términos de la serie de Fibonacci. 
El primer término de la serie de Fibonacci es 0, el segundo es 1 y el resto se calcula 
sumando los dos anteriores, por lo que tendríamos que los términos son 
0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144… El número n se debe introducir por teclado. -->

<html>
<form name="form" action="" method="post">
    <label>Sucesión de Fibonacci: ¿Cuántos números quiere escibir? </label>
    <input type="text" name="number" />
    <input type="submit" value="CALCULAR" />
</form>

</html>

<?php

function fibonacciArray($number)
{
    $serie = [0, 1];
    for ($i = 2; $i < $number; $i++) {
        $serie[] = $serie[$i - 1] + $serie[$i - 2];
    }
    return $serie;
}

function fibonacciRecursivo($number)
{
    if ($number == 0 || $number == 1) return $number;
    return  fibonacciRecursivo($number - 1) + fibonacciRecursivo($number - 2);
}

function fibonacci($number)
{
    $v1 = 0;
    $v2 = 1;
    for ($i = 0; $i < $number; $i++) {
        $aux = $v1 + $v2;
        $v1 = $v2;
        $v2 = $aux;
    }
    return $v1;
}



if (isset($_POST['number']) && is_numeric($valor = $_POST['number']) && $valor>0) {
    
    // Mostrando la serie desde Array
    echo implode(', ',fibonacciArray($valor));
    echo '<br/><br/>';

    // Con función iterativa
    for ($i = 0; $i < $valor; $i++) {
        echo fibonacci($i) . ' ';
    }
    echo '<br/><br/>';

    // Con función recursiva
    for ($i = 0; $i < $valor; $i++) {
        echo fibonacciRecursivo($i). ' ';
    }
    echo '<br/><br/>';

    // Calculo de eficiencia de cada algoritmo
    $tiempo_inicio = microtime(true);  // Medimos el tiempo en microsegundos
    echo fibonacci($valor) . ' ';  // calculo iterativo
    echo '<br/>';
    echo round(microtime(true) - $tiempo_inicio,5);  // Calculamos el número de microsegundos pasados
    echo '<br/>';

    // Repetimos para recursivo
    $tiempo_inicio = microtime(true);
    echo fibonacciRecursivo($valor) . ' ';
    echo '<br/>';
    echo round(microtime(true) - $tiempo_inicio,5);



} else {
    echo ("Escribe un número");
}
