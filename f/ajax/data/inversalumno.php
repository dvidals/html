<?php
    header('Content-Type: application/json; charset=utf-8');

    $bd = new mysqli('localhost','root','root','proyecto');

    if ($bd->connect_errno) { 
         die('No puedo conectar: '.$bd->connect_error);
    }
      
$id = $bd->real_escape_string($_POST['id']);
$horas = $bd->real_escape_string($_POST['horas']);

//var_dump($passwd);

switch($_POST['accion']){

  case "anadir":


  $sql = "INSERT INTO usuarios (id, usuario, passwd, tipousuario, alta, baja, activo, datos) VALUES (null, '$usuario', '$passwd', '$tipousuario', '$alta', null,'$activo', '$datos')"; 
	
	
  break;

  case "editar":

  $sql="UPDATE fct SET horas='$horas' WHERE fct.alumno='$id'";
  break;
  $bd->query($sql);  
  case "borrar":

  $sql="DELETE FROM clientes WHERE clientes.id='$id'";
  break;
  
    }



echo $sql; 
$bd->query($sql);  

if($bd->errno) die($bd->error);  

/*mysql_query("INSERT INTO clientes(name , usuario, passwd, tipousuario, alta, baja) VALUES ('$name', '$usuario', '$passwd', '$tipousuario', '$alta', '$baja')"; */
?>