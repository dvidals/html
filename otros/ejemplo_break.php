<?php

//imprime valores entre intervalo, siempre que no superen el valor limite
function valores($inicio,$fin,$limite)
{
//$i=$inicio;
for ($i=$inicio; $i < $fin; $i++) {
    if ($i > $limite) break;
    echo "<br>$i";
    }
}
//elegimos de intervalo de inicio, de fin, y un valor que haga saltar el break
$inicio=0;
$fin=100;
$limite=20;
valores($inicio,$fin, $limite);

?>

