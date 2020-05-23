<?php
require 'sesiones.php';
require_once 'bd.php';
	comprobar_sesion();
//require 'cabecera.php';
/*formulario de login habitual
si va bien abre sesión, guarda el nombre de usuario y redirige a principal.php 
si va mal, mensaje de error */

if ($_SERVER["REQUEST_METHOD"] == "POST") {  
	
	$usuario=$_SESSION['usuario']['codRes'];//nueva
	$clave=$_SESSION['usuario']['clave'];
	$nueva_clave=htmlentities(addslashes($_POST['contra']));
	$pass_cifrado=password_hash($nueva_clave,PASSWORD_DEFAULT,array("cost"=>12));
	
	
	
	if($clave==$nueva_clave){
		
		$err = true;
		
	}else{
		
		
		
		try{
		cambiar_clave($_SESSION['usuario']['codRes'],$pass_cifrado);
		
		
		}catch(Exception $e){		//nueva	
		
		echo "Línea del error: " . $e->getLine()."<br>".$e->getMessage()."<br>"; //nueva
		echo  $pass_cifrado."<br>".$usuario."<br>";//nueva
		var_dump($pass_cifrado);
		echo "<br> Es false la variable resul, no se produjo la consulta<br><br>";
		var_dump($e);
		
		
		
		
		
			
		} 
		
		$_SESSION['usuario']=comprobar_usuario($_SESSION['usuario']['correo'], $pass_cifrado);
		//$_SESSION['usuario']=comprobar_usuario_modificado($_SESSION['usuario']['correo'], $pass_cifrado); //nueva
		//$_SESSION['usuario']=comprobar_usuario_encriptado($_SESSION['usuario']['correo'], $pass_cifrado); //nueva
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
			<input id = "clave" name = "contra" type = "password">					
			<input type = "submit">
		</form>
	</body>
</html>

