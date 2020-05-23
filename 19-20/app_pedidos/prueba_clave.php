<?php

require_once 'bd.php';



if ($_SERVER["REQUEST_METHOD"] == "POST") {  

    $usuario="huelva1@empresa.com";
    $codRes=11;

		cambiar_clave($codRes, $_POST['clave']);
		
		
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

