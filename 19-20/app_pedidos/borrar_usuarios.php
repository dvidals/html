<?php

require 'sesiones.php';
require_once 'bd.php';
$res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
$bd = new PDO($res[0], $res[1], $res[2]);
	comprobar_sesion();

$CodRes=$_GET["CodRes"];

$bd->query("delete from usuarios where CodRes='CodRes'");
header("Location:crud_usuarios.php");


 



?>