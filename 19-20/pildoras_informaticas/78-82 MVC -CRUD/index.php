<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>78-82 CRUD MVC</title>
<link rel="stylesheet" type="text/css" href="hoja.css">
</head>

<body>
<h1>Modelo Vista Controlador</h1>
<br/>

<?php
    require_once("controlador/Personas_controlador.php");


?>

<?php

//$registros=$base->query("select * from datos_usuarios limit $inicio,$limite")->fetchAll(PDO::FETCH_OBJ);

//Para que funcione el botón insertar:
if(isset($_POST['cr'])){

  $nombre=$_POST['Nom'];
  $apellido=$_POST['Ape'];
  $direccion=$_POST['Dir'];

  $sql="insert into datos_usuarios (Nombre, Apellido, Direccion) values (:nom, :ape, :dir)";
  $resultado=$base->prepare($sql);
  $resultado->execute(array(":nom"=>$nombre,":ape"=>$apellido,":dir"=>$direccion));
  header("Location:index.php");


}


?>

</body>
</html>