<?php

setcookie('nueva', "valor", time() + 3600 * 24);
echo $_COOKIE["nueva"]; //Las variables superglobales se cargan con lo que tengan almacenado antes de escribir ningún código. Por lo que la 
//primera vez $_COOKIE no tiene nada, la segunda vez que se carga la página ya si porque ahora ya tiene almacenado lo que
// se le cargo con la instrucción de setcookie
var_dump($_COOKIE);

//arrays con objetos, estudiar el primer parcial.