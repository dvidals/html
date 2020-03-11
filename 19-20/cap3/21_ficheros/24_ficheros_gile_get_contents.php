<?php

$contenido = file_get_contents("21_fichero_ejemplo.txt");
echo "Contenido del fichero: $contenido<br>";
//Si el fichero ya existe lo reescribe
$res = file_put_contents("24_fichero_salida.txt", "Fichero creado con file_put_contents");
if ($res) {
    echo "Fichero creado con éxito";
} else {
    echo "Error al crear el fichero";
}