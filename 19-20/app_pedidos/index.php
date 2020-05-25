<?php

require_once 'bd.php';
error_reporting(E_ALL ^ E_NOTICE);
/*formulario de login habitual
si va bien abre sesión, guarda el nombre de usuario y redirige a principal.php 
si va mal, mensaje de error */

if ($_SERVER["REQUEST_METHOD"] == "POST") {  
	
		$tipo=comprobar_tipo($_POST['usuario']);
		if($tipo['tipo']=="Administrador"){
			echo "El tipo es".$tipo."<br>";
			//$usu=comprobar_usario($_POST['usuario'], $_POST['clave']);
			$usu = comprobar_usuario(htmlentities(addslashes($_POST['usuario'])), htmlentities(addslashes($_POST['clave'])));
			if($usu===false){
		$err = true;
		$usuario = $_POST['usuario'];
			}else{
				session_start();
		 //$usu tiene campos correo y codRes, correo 
		$_SESSION['usuario'] = $usu;
		$_SESSION['carrito'] = [];
			header ("Location:categorias_admin.php");
			return;
				
				
			}
			
		}
		
	
	else{
		
		$modificada=comprobar_modificada($_POST['usuario']);
		if($modificada['modificada']==0){
			$usu = comprobar_usuario(htmlentities(addslashes($_POST['usuario'])), htmlentities(addslashes($_POST['clave'])));
			if($usu===false){
		$err = true;
		$usuario = $_POST['usuario'];
		
			}else{
				session_start();
				//$usu tiene campos correo y codRes, correo 
				$_SESSION['usuario'] = $usu;
				$_SESSION['carrito'] = [];
				header ("Location:cambiar_clave.php");
				return;
				
			}
			
			
		}else{
			
			$usu = comprobar_usuario_encriptado($_POST['usuario'], $_POST['clave']);
			if($usu===false){
			$err = true;
			$usuario = $_POST['usuario'];
			}else{
				session_start();
				//$usu tiene campos correo y codRes, correo 
				$_SESSION['usuario'] = $usu;
				$_SESSION['carrito'] = [];
				header("Location: categorias.php");
				return;	
			
		}
	}
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
		<?php if(isset($_GET["redirigido"])){
			echo "<p>Haga login para continuar</p>";
		}?>
		<?php if(isset($err) and $err == true){
			echo "<p> Revise usuario y contraseña</p>";
		}?>
		<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
			<label for = "usuario">Usuario</label> 
			<input value = "<?php if(isset($usuario))echo $usuario;?>"
			id = "usuario" name = "usuario" type = "text">		
			<label for = "clave">Clave</label> 
			<input id = "clave" name = "clave" type = "password">					
			<input type = "submit">
		</form>
	</body>
</html>