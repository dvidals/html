<?php

$fich = fopen("23_matriz.txt", "r");
if ($fich === False) {
    echo "No se encuentra el fichero o no se pudo leer<br>";
} else {
    echo "Primera forma del fscanf<br>";
    while (!feof($fich)) {
        $num = fscanf($fich, "%d %d %d %d");
        echo "$num[0] $num[1] $num[2] $num[3] <br>";
    }
}
rewind($fich);
 echo "<br>Segunda forma del fscanf<br>";
while (!feof($fich)) {
    $num = fscanf($fich, "%d %d %d %d", $num1, $num2, $num3, $num4);
    echo "$num1 $num2 $num3 $num4 <br>";
}
fclose($fich);
