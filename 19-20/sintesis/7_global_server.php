<?php
echo "Ruta dentro de htdocs: " . $_SERVER['PHP_SELF'];
echo "<BR>";
echo "Nombre del servidor: " . $_SERVER['SERVER_NAME'];
echo "<BR>";
echo "Software del servidor: " . $_SERVER['SERVER_SOFTWARE'];
echo "<BR>";
echo "<BR>";
echo "Protocolo: " . $_SERVER['SERVER_PROTOCOL'];
echo "<BR>";
echo "Método de la petición: " . $_SERVER['REQUEST_METHOD'];
