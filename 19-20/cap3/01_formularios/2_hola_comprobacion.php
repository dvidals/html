<?php
// localhost/libro_servidor/cap3/2_hola_comprobacion.php?nombre

if (empty($_GET["nombre"])) {
    echo "Error, falta el parámetro nombre";
} else {
    echo "Hola " . $_GET["nombre"];
}
	