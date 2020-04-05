<?php

function manejadorErrores($errno, $str, $file, $line) {
    echo "Ocurrió el error: $errno. ".$str.". ".$file.". ".$line;
}

set_error_handler("manejadorErrores");
$a = $b; // causa error, $b no está inicializada