<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Conexión a BBDD con PDO</title>

</head>

<body>

	<?php
	
	try{

		$base=new PDO ('mysql:host=localhost;dbname=pruebas','root','');//creamos la conexión, 3 argumentos separados por comas.
	
		echo "Conexión OK";

	}catch(Exception $e){

		die('Error: '.$e->GetMessage());		

	}finally{
		$base=null; //vaciar la memoria
	}

	?>

</body>
</html>