<?php

$fich = fopen("21_fichero_ejemplo.txt", "r");
if ($fich === False) {
    echo "No se encuentra el fichero o no se pudo leer<br>";
} else {
    while (!feof($fich)) {
        echo fgetc($fich);
    }
}
fclose($fich);
