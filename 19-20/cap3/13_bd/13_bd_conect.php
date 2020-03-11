<?php
print_r(PDO::getAvailableDrivers()); echo '<br/>';

$cadena_conexion = 'mysql:host=localhost;port=3306;dbname=empresa;';
$usuario = 'user';
$clave = '1234';
try {
    $bd = new PDO($cadena_conexion, $usuario, $clave);
    echo "Conexión establecida con exito";
} catch (PDOException $e) {
    echo 'Error con la base de datos: ' . $e->getMessage();
} 