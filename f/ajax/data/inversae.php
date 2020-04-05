<?php
    header('Content-Type: application/json; charset=utf-8');

    $bd = new mysqli('localhost','root','root','proyecto');

    if ($bd->connect_errno) { 
         die('No puedo conectar: '.$bd->connect_error);
    }
      
$id = $bd->real_escape_string($_POST['id']);
$razon_social = $bd->real_escape_string($_POST['razon_social']);
$direccion = $bd->real_escape_string($_POST['direccion']);
$poblacion = $bd->real_escape_string($_POST['poblacion']);
$codpostal = $bd->real_escape_string($_POST['codpostal']);
$provincia = $bd->real_escape_string($_POST['provincia']);
$pais = $bd->real_escape_string($_POST['pais']);
$contacto = $bd->real_escape_string($_POST['contacto']);
$telefono = $bd->real_escape_string($_POST['telefono']);
$movil = $bd->real_escape_string($_POST['movil']);

switch($_POST['accion']){

  case "anadir":


  $sql = "INSERT INTO empresa (id, razon_social, direccion, poblacion, codpostal, provincia, pais, contacto, telefono, movil) VALUES ('$id', '$razon_social', '$direccion', '$poblacion', '$codpostal', '$provincia','$pais','$contacto','$telefono','$movil')";

	$bd->query($sql);  
	
  break;

  case "editar":

  $sql="UPDATE empresa SET id='$id',razon_social='$razon_social',direccion='$direccion',poblacion='$poblacion',codpostal='$codpostal', provincia='$provincia',pais='$pais',contacto='$contacto',telefono='$telefono',movil='$movil' WHERE empresa.id='$id'";
    $bd->query($sql);  

  
  break;

  case "borrar":

  $sql="DELETE FROM empresa WHERE empresa.id='$id'";
  $bd->query($sql);  
  break;

  }

?>