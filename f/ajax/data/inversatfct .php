<?php
session_start();
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
$alumno = $bd->real_escape_string($_POST['alumno']);
$docente = $bd->real_escape_string($_POST['docente']);
$inicio = $bd->real_escape_string($_POST['inicio']);
$fin = $bd->real_escape_string($_POST['fin']);
$horas = $bd->real_escape_string($_POST['horas']);
$empresa = $bd->real_escape_string($_POST['empresa']);
$nombreal = $bd->real_escape_string($_POST['nombreal']);
$nombretu = $bd->real_escape_string($_POST['nombretu']);
$razon_social = $bd->real_escape_string($_POST['razon_social']);
//var_dump($passwd);

switch($_POST['accion']){

  case "anadir":

  



  $sql = "INSERT INTO fct (alumno, docente, inicio, fin, horas, empresa) VALUES ( '$alumno', '$docente', '$inicio', '$fin', '$horas','$empresa')";
  echo $sql;

	$bd->query($sql);  

  $sql="SELECT alumnos.nombre as nombreal, docentes.nombre as nombretu, empresa.razon_social as razon_social FROM fct RIGHT JOIN alumnos On(fct.alumno=alumnos.id) RIGHT JOIN docentes On (fct.docente=docentes.id) RIGHT JOIN empresa On (fct.empresa=empresa.id) WHERE fct.alumno='$alumno'" ;
  echo $sql;

  $result = $bd->query($sql);
if ($bd->errno) {die('Esto va mal' . $bd->error);}

   
   $resulta['data']=array();
    while($registro = $result->fetch_assoc()) {
        
        $resulta['data'][]=$registro;
        
        
    }
        
    header('Content-Type: application/json; charset=utf-8');

    $result->close();

    echo json_encode($resulta);
  
  
  break;

  case "editar":

  $sql="UPDATE fct SET inicio='$inicio',fin='$fin',horas='$horas' WHERE fct.alumno='$alumno'";
    $bd->query($sql);  

  break;

  
  
    }



//echo $sql; 
//echo $nuevaid;


/*mysql_query("INSERT INTO clientes(name , usuario, passwd, tipousuario, alta, baja) VALUES ('$name', '$usuario', '$passwd', '$tipousuario', '$alta', '$baja')"; */
?>