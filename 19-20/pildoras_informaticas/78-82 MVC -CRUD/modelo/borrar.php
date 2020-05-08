<?php

//include ("conexion.php");
//Nueva conexión:
require_once("Conectar.php");
$base=Conectar::conexion();

//------------------

$Id=$_GET["Id"];

$base->query("delete from datos_usuarios where Id='$Id'");
header("Location:../index.php");


 



?>