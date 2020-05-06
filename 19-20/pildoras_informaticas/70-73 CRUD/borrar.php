<?php

include ("conexion.php");
$Id=$_GET["Id"];

$base->query("delete from datos_usuarios where Id='$Id'");
header("Location:index.php");


 



?>