<?php

require 'sesiones.php';
require_once 'bd.php';
$res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
$bd = new PDO($res[0], $res[1], $res[2]);
	comprobar_sesion();

$CodProd=$_GET["CodProd"];

$bd->query("delete from productos where CodProd='$CodProd'");
header("Location:crud_productos.php");


 



?>