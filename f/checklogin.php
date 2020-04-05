<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
$host_db = "localhost";
$user_db = "root";
$pass_db = "root";
$db_name = "proyecto";
$tbl_name = "usuarios";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$usuario = $_POST['usuario'];
$passwd = $_POST['passwd'];
 

$sql = "SELECT id,passwd,tipousuario FROM $tbl_name WHERE usuario = '$usuario'";

$result = $conexion->query($sql);

if($row = $result->fetch_assoc()) {
 
if($row['passwd'] == $passwd){
	$_SESSION['usuario'] = $usuario;
	$_SESSION['id'] = $row['id'];
	echo "Bienvenido! " . $_SESSION['usuario'];
	//sleep(5);
		if($row['tipousuario']==1) {
		header("Location: administrador.php");
	}else{
	  if($row['tipousuario']==2)  {
		header("Location:tutor.php");
	  }else {
		if($row['tipousuario']==3)  {
			header("Location:docente.php");
		}else{
			if($row['tipousuario']==4){
				header("Location:alumno.php");
			}
		}

		}	
	}
	}else{
		echo "usuario o contraseña estan incorrectos.";

	   echo "<br><a href='login.html'>Volver a Intentarlo</a>";
	//header("Location: index.html");
		exit();
	}
}else{
	echo "usuario o contraseña estan incorrectos.";

   echo "<br><a href='login.html'>Volver a Intentarlo</a>";
	//header("Location: index.html");
	exit();
}

 mysqli_close($conexion); 
 ?>

