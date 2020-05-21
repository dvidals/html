<?php 
	/*comprueba que el usuario haya abierto sesión o redirige*/
	require 'sesiones.php';
	require_once 'bd.php';
	comprobar_sesion();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>Panel Administrador</title>
	</head>
	<body>
		<?php require 'cabecera_admin.php';?>
		<h1>Paneles</h1>		
		<!--lista de vínculos con la forma 
		productos.php?categoria=1-->
		<?php
			echo "<ul>"; //abrir la lista
				
				echo "<li><a href='crud_usuarios.php'>Usuarios</a></li>";
				echo "<li><a href='crud_productos.php'>Productos</a></li>";
				
			echo "</ul>";
		
		?>
	</body>
</html>