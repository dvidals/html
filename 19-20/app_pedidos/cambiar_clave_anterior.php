<?php
require 'sesiones.php';
require_once 'bd.php';
	comprobar_sesion();
//require 'cabecera.php';
/*formulario de login habitual
si va bien abre sesión, guarda el nombre de usuario y redirige a principal.php 
si va mal, mensaje de error */

if ($_SERVER["REQUEST_METHOD"] == "POST") {  

	$clave=$_SESSION['usuario']['clave'];
	$nueva_clave=$_POST['clave'];
	
	if($clave==$nueva_clave){
		
		$err = true;
		
	}else{
		cambiar_clave($_SESSION['usuario']['codRes'], $_POST['clave']);
		$_SESSION['usuario']=comprobar_usuario($_SESSION['usuario']['correo'], $_POST['clave']);
		if($_SESSION['usuario']['modificada']==1){
			echo "Clave cambiada correctamente";
			echo "<br><br><h2><a href='categorias.php'>Ir a la página principal</a></h2>";
		}
		else echo "Se ha producido un error al cambiar la contraseña";
		
	}	
}
?>

<!DOCTYPE html>

<html>
	<head>
		<title>Formulario de login</title>
		<meta charset = "UTF-8">
	</head>
	<body>	
		
		<?php if(isset($err) and $err == true){
			echo "<p> Hay que introducir una contraseña distinta a la actual</p>";
		}?>
		<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
			<h2> Introduzca su nueva clave:</h2>
			<label for = "clave"> Nueva Clave</label> 
			<input id = "clave" name = "clave" type = "password">					
			<input type = "submit">
		</form>
	</body>
</html>

