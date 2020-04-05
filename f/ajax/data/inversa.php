<?php
    header('Content-Type: application/json; charset=utf-8');

    $bd = new mysqli('localhost','root','root','proyecto');

    if ($bd->connect_errno) { 
         die('No puedo conectar: '.$bd->connect_error);
    }
      
$id = $bd->real_escape_string($_POST['id']);
$usuario = $bd->real_escape_string($_POST['usuario']);
$passwd = $bd->real_escape_string($_POST['passwd']);
$tipousuario = $bd->real_escape_string($_POST['tipousuario']);
$alta = $bd->real_escape_string($_POST['alta']);
$baja = $bd->real_escape_string($_POST['baja']);
$activo = $bd->real_escape_string($_POST['activo']);
$datos = $bd->real_escape_string($_POST['datos']);


//var_dump($passwd);

switch($_POST['accion']){

  case "anadir":


  $sql = "INSERT INTO usuarios (id, usuario, passwd, tipousuario, alta, baja, activo, datos) VALUES (null, '$usuario', '$passwd', '$tipousuario', '$alta', null,'$activo', '$datos')"; 
	
	
  break;

  case "editar":

  $sql="UPDATE usuarios SET usuario='$usuario',passwd='$passwd',tipousuario='$tipousuario',alta='$alta',baja='$baja', activo='$activo', datos='$datos'WHERE clientes.id='$id'";
  break;

  case "borrar":

  $sql="DELETE FROM clientes WHERE clientes.id='$id'";
  break;
  
    }



echo $sql; 
$bd->query($sql);  

if($bd->errno) die($bd->error);  

/*mysql_query("INSERT INTO clientes(name , usuario, passwd, tipousuario, alta, baja) VALUES ('$name', '$usuario', '$passwd', '$tipousuario', '$alta', '$baja')"; */
?>