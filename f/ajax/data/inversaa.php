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
$direccion = $bd->real_escape_string($_POST['direccion']);
$poblacion = $bd->real_escape_string($_POST['poblacion']);
$codpostal = $bd->real_escape_string($_POST['codpostal']);
$provincia = $bd->real_escape_string($_POST['provincia']);
$fechanac = $bd->real_escape_string($_POST['fechanac']);
//var_dump($passwd);
$aErrores = array();
$aMensajes = array();
$patron_texto = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/";

switch($_POST['accion']){

  case "anadir":
  // Mostrar la información recibida del formulario:
        //print_r( $_POST );
        //echo "<hr/>";

     if( preg_match($patron_texto, $_POST['apellidos']) && preg_match($patron_texto, $_POST['usuario']))
        {
    
      $sql = "INSERT INTO usuarios (id, usuario, passwd, tipousuario, alta, baja, activo) VALUES (null, '$usuario', '$passwd', '$tipousuario', '$alta', '$baja','$activo')";

      $bd->query($sql);  
      $nuevaid=$bd->insert_id;

      $sql = "INSERT INTO alumnos (id, apellidos, nombre, dni, direccion, poblacion, codpostal, provincia, fechanac) VALUES ('$nuevaid', '$apellidos', '$usuario', '$dni', '$direccion', '$poblacion', '$codpostal', '$provincia', '$fechanac')";
      $bd->query($sql); 
        }
        else{
          $aErrores[] = "El nombre y/o apellidos sólo pueden contener letras y espacios";
        foreach ($aErrores as $key => $value) {
         echo  $value ;
        }
      
      // echo '<script type="text/javascript">document.getElementById("contenido").innerHTML = "Fallo el envío del formulario.";</script>'; 
      // $('#error').html(data);
      // echo "error explicando a Pablo";
      //   
        }
	if ($bd->errno) { 
         echo('No puedo conectar: '.$bd->error);
    }
  break;

  case "editar":

  $sql="UPDATE usuarios SET usuario='$usuario',passwd='$passwd',tipousuario='$tipousuario',alta='$alta',baja='$baja', activo='$activo' WHERE usuarios.id='$id'";
    $bd->query($sql);  
    echo $sql;
    if ($bd->errno) { 
         echo('No puedo conectar: '.$bd->error);
    }

  $sql="UPDATE alumnos SET apellidos='$apellidos',nombre='$usuario',dni='$dni', direccion='$direccion', poblacion='$poblacion', codpostal='$codpostal', provincia='$provincia', fechanac='$fechanac' WHERE alumnos.id='$id'";
  $bd->query($sql);  
  if ($bd->errno) { 
         echo('No puedo conectar: '.$bd->error);
    }

  break;

    
    }




?>