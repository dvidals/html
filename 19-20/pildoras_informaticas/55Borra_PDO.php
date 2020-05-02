<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Conexión a BBDD con PDO</title>

</head>

<body>

	<?php

	$dorsal=$_GET['dorsal'];
	
	$nombre=$_GET['nombre'];
	$apellidos=$_GET['apellidos'];
	$federado=$_GET['federado'];
	$licencia=$_GET['licencia'];
	$categoria=$_GET['categoria'];
	$sexo=$_GET['sexo'];
	$fechanac=$_GET['fechanac'];
	$club=$_GET['club'];
	$equipo=$_GET['equipo'];
	
	try{

		$base=new PDO ('mysql:host=localhost;dbname=pruebas','root','');//creamos la conexión, 3 argumentos separados por comas.
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//echo "Conexión OK";
		
		$base->exec("SET CHARACTER SET utf8");

		$sql="delete from tabla where Dorsal=:dor";

		$resultado=$base->prepare($sql);

	$resultado->execute(array(":dor"=>$dorsal,/*":nom"=>$nombre,":ape"=>$apellidos, ":fed"=>$federado, ":lic"=>$licencia, ":cat"=>$categoria, ":sex"=>$sexo, ":fec"=>$fechanac, ":clu"=>$club, ":equ"=>$equipo*/));
		
		echo "Registro borrado <br>";
		
		
		
		$resultado->closeCursor(); //parar cerrar el cursor que recorre la tabla virtual.


	}catch(Exception $e){

		die('Error: '.$e->GetMessage()." LÍNEA: ".$e->getLine()." Código: ".$e->getCode()." Archivo: ".$e->getFile());		

	}finally{

		$base=null; //vaciar la memoria
	}

	?>

</body>
</html>