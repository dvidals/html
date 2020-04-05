<?php

/*
 Programa que devuelva:
qué navegador está utilizando el cliente
la versión de Php
El protocolo, nombre del host y el path de la página en el servidor
IP del cliente, la IP del servidor y el nombre del fichero que se está ejecutando
propietario del fichero que está en ejecución
url actual

 */
function datos(){
    echo $_SERVER['HTTP_USER_AGENT']; //OK
    echo "<br>";
    echo phpversion();//OK
    echo "<br>";
    echo $_SERVER['SERVER_PROTOCOL'];//OK
    echo "<br>";
    echo gethostname();//OK
    echo "<br>";
    echo $_SERVER['PHP_SELF'];//OK
    echo "<br>";
    echo $_SERVER['REMOTE_ADDR'];//OK
    echo "<br>";
    echo $_SERVER['SERVER_ADDR'];//OK
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];//OK
    echo "<br>";
    $propietario= fileowner($_SERVER['PHP_SELF']);
    var_dump($propietario);
    echo "<br>";
    
}
 datos();
?>
