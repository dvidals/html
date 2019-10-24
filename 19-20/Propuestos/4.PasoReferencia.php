<?php

/*
  Fai o mesmo que no exercicio anterior pero co parámetro pasado por refencia.

 */

$a=3;
echo 'El valor de $a antes de entrar en la función es '. "$a <br>";
function incrementar (&$a){
    $a++;
    echo 'El valor de $a dentro de la función es '." $a <br>";
}
incrementar ($a);
echo 'El valor de $a al acabar la función es '. $a;
?>
