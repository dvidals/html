<?php

$arr2 = array(
    "1111A" => "Juan Vera Ochoa",
    "1112A" => "Maria Mesa Cabeza",
    "1113A" => "Ana Puertas Peral"
);
foreach ($arr2 as $nombre) {
    //Después del as accedemos en la variable $nombre el contenido de cada uno de los elementos del array
    echo "$nombre <br>";
}
foreach ($arr2 as $codigo => $nombre) {
    //Después del as, ahora en la variable $codigo almacenamos el índice y en la
    //$variable $nombre almacenamos el contenido de cda uno de los elementos del array
    echo "Código: $codigo Nombre: $nombre <br>";
}