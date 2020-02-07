<?php
// https://www.php.net/manual/es/language.oop5.autoload.php

spl_autoload_register(function ($nombre_clase) {
    include_once $nombre_clase . '.php';
});
// Uso include_once para evitar el overhead que supone cargar de nuevo el fichero
// cada vez que se instancia la clase

// Solo funcionaría si se mantiene el patrón de una clase por fichero 
// (al estilo de java)

$obj  = new MiClase1();
$obj2 = new MiClase2();