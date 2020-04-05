<!doctype html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Notas numericas</title>
</head>

<body>

<h2>Asignación de notas</h2>

<?php
	// Si el formulario todavía no se envió
	// Muestra el formulario
	if (  
            (!isset($_POST['nota']))
            || 
            (strlen($_POST['nota'])==0)
      ) {
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
    	INTRODUCE LA NOTA: <br>
    	<input type="text" name="nota" size="3" />
    	<p><input type="submit" name="submit" value="Enviar" />
</form>

<?php
	// Si el formulario se envió, procesa la entrada
	} else {
		// recupera la nota del envío POST
		$nota = $_POST['nota'];

		// asignación a una de las cuatro notas:

		if ($nota < 5 && $nota>=0) {
			echo "SUSPENSO";
		} elseif ($nota < 7  && $nota>=5) {
			echo "APROBADO";
		} elseif ($nota < 9 && $nota>=7) {
			echo "NOTABLE";
		} elseif ($nota <=10 && $nota >= 9) {
			echo "SOBRESALIENTE";
		} else {
			echo "Valor introducido erróneo";	
		}
	}
?>
</body>
</html>