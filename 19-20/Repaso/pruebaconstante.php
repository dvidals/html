<?php


define ('NUMEROS', array(1,2,3,4,5));
define ('CONS2', NUMEROS);
//echo "<BR>NUMEROS: ".CONS2[1];
// echo "<BR>NUMEROS: ".NUMEROS[1];


$var=NUMEROS;
prueba($var);

function prueba(& $val){
echo ++$val[1];
}

echo "<br>"; var_dump(NUMEROS);
echo "<br>"; var_dump($var) ;



?>