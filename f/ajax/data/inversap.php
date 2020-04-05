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
if (isset($_POST['baja'])){
  $baja = $bd->real_escape_string($_POST['baja']);
}
$activo = $bd->real_escape_string($_POST['activo']);
$apellidos = $bd->real_escape_string($_POST['apellidos']);
$dni = $bd->real_escape_string($_POST['dni']);


//var_dump($passwd);

switch($_POST['accion']){

  case "anadir":


  $sql = "INSERT INTO usuarios (id, usuario, passwd, tipousuario, alta, baja, activo) VALUES (null, '$usuario', '$passwd', '$tipousuario', '$alta', '$baja','$activo')";

	$bd->query($sql);  
  $nuevaid=$bd->insert_id;

  $sql = "INSERT INTO docentes (id, apellidos, nombre, dni) VALUES ('$nuevaid', '$apellidos', '$usuario', '$dni')";
  $bd->query($sql);  

	
  break;

  case "editar":

  $sql="UPDATE usuarios SET usuario='$usuario',passwd='$passwd',tipousuario='$tipousuario',alta='$alta',baja='$baja', activo='$activo' WHERE usuarios.id='$id'";

echo $sql;

    $bd->query($sql);  

  $sql="UPDATE docentes SET apellidos='$apellidos',nombre='$usuario',dni='$dni' WHERE docentes.id='$id'";
  $bd->query($sql);  

  break;

  
  
    }



//echo $sql; 
//echo $nuevaid;


/*mysql_query("INSERT INTO clientes(name , usuario, passwd, tipousuario, alta, baja) VALUES ('$name', '$usuario', '$passwd', '$tipousuario', '$alta', '$baja')"; */
?>