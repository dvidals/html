<?php

/*
 Crea un programa en php que chama a unha funcion á que se lle pasa un parametro por valor, 
 e o incrementa e 1. Debe mostrar o valor da variable antes e despois da chamada á función, e o valor dentro da función.
  Exemplo de saída: o valor inicial da variable x é 3 o valor de x dentro da función é 4 o valor de x ao rematar a función é 3.
 */

$a=3;
echo 'El valor de $a antes de entrar en la función es '. "$a <br>";
function incrementar ($a){
    $a++;
    echo 'El valor de $a dentro de la función es '." $a <br>";
}
incrementar ($a);
echo 'El valor de $a al acabar la función es '. $a;

?>
