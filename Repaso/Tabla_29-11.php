<?php

echo "Tabla de multiplicar del 1 al 10";

for ($i=1;$i<=10;$i++){
    echo "<hr>Tabla del $i: </br>";
    for ($j=1;$j<=10;$j++){
       echo "$i x $j = ".$i*$j."<br/>";
    }
}
