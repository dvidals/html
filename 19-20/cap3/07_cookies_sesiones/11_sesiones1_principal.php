<?php
	session_start();
	// Si se accede a esta página sin estar registrado, redirige a la de registro
	if(!isset($_SESSION['usuario'])){
		header("Location: 10_sesiones1_login.php?redirigido=true");
	}	
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Página principal</title>
		<!--<link rel="stylesheet" href="./css/alta_usuarios.css">-->
		<meta charset = "UTF-8">
	</head>
	<body>		
		<?php echo "Bienvenido ".$_SESSION['usuario'];?>
		<br><a href = "11_sesiones1_logout.php"> Salir <a>
	</body>
</html>