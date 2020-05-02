<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Conexión a BBDD con PDO</title>

</head>

<body>

	<?php

	$nombre=$_GET['nombre'];
	$categoria=$_GET['categoria'];
	
	try{

		$base=new PDO ('mysql:host=localhost;dbname=pruebas','root','');//creamos la conexión, 3 argumentos separados por comas.
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//echo "Conexión OK";
		
		$base->exec("SET CHARACTER SET utf8");

		$sql="select Dorsal, Nombre, Apellidos, Categoria_Prueba from tabla where Nombre=:nom and Categoria_Prueba=:cat order by Dorsal asc";

		$resultado=$base->prepare($sql);

		$resultado->execute(array(":nom"=>$nombre, ":cat"=>$categoria));
		$contador=1;
		while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
			
			echo "Ciclista ".$contador.", con los siguientes campos: Dorsal: ".$registro['Dorsal']." Nombre: ".$registro['Nombre']." Apellidos: ".$registro['Apellidos']." Categoría: ".$registro['Categoria_Prueba']."<br>";
			$contador++;
		}

		$resultado->closeCursor(); //parar cerrar el cursor que recorre la tabla virtual.


	}catch(Exception $e){

		die('Error: '.$e->GetMessage()." LÍNEA: ".$e->getLine()." Código: ".$e->getCode()." Archivo: ".getFile());		

	}finally{

		$base=null; //vaciar la memoria
	}

	?>

</body>
</html>