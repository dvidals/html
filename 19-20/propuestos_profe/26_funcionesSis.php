<!-- 26. Programa que devuelva:
qué navegador está utilizando el cliente
la versión de Php
El protocolo, nombre del host y el path de la página en el servidor
IP del cliente, la IP del servidor y el nombre del fichero que se está ejecutando
propietario del fichero que está en ejecución url actual -->

<?php

echo "Navegador del cliente: " . $_SERVER['HTTP_USER_AGENT'] . " <br/><br/>";

echo "Versión de php: " . phpversion() . "<br/><br/>";

echo "Protocolo -> " . $_SERVER['SERVER_PROTOCOL'] . "<br/>";
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $protocol = "https";
} else {
    $protocol = "http";
}
echo "Protocolo -> " . $protocol . "<br/>";

echo "Host -> " . gethostname() . "<br/>";
echo "Host -> " . $_SERVER['HTTP_HOST'] . "<br/>";
echo "Path -> " . $_SERVER['SCRIPT_FILENAME'] . "<br/><br/>";

echo "IP del Cliente: " . $_SERVER['REMOTE_ADDR'] . "<br/>";
echo "IP del Servidor: " . $_SERVER['SERVER_ADDR'] . "<br/>";

echo "Nombre del fichero: " . basename($_SERVER['SCRIPT_FILENAME']) . "<br/><br/>";
echo "Nombre del fichero: " . basename($_SERVER['PHP_SELF']) . "<br/><br/>";

echo "Propietario del fichero que está en ejecución: " . get_current_user() . "<br/><br/>";

echo "Url actual: $_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]<br/><br/>";