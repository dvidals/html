<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Conexión a BBDD con POO</title>

</head>

<body>

	<?php
	$conexion= new mysqli("localhost","root","","pruebas");

	if($conexion->connect_errno){    //si conexion llama a la función connect_errno es que falla la conexion
	
	echo "Falló la conexión".$conexion->connect_errno; //la función connect_errno también devuelve el mensaje de error.
	}

	//mysqli_set_charset($conexion,"utf8"); Antes se hacía así en procedimiental
	
	$conexion->set_charset("utf8"); //ahora se haría así

	$sql="Select * from tabla order by Dorsal asc";

	//$resultados=mysqli_query($conexion,$sql); Antes

	$resultados=$conexion->query($sql); //Ahora lo mismo se haría así

	if($conexion->errno){
		die($conexion->error);

	}
	
	// Con el if anterior le decimos que si la conexión falle que mate el error, que cierre la conexión.

	//while($fila=mysqli_fetch_array($resultados,MYSQLI_ASSOC); Antes era así

	while ($fila=$resultados->fetch_assoc()){
	echo "<table><tr><td>";
    	echo $fila['Dorsal']."</td><td>";
    	echo $fila['Nombre']."</td><td>";
    	echo $fila['Apellidos']."</td><td>";
    	echo $fila['Federado']."</td><td>";
    	echo $fila['Licencia']."</td><td>";
    	echo $fila['Categoria_Prueba']."</td><td>";
    	echo $fila['Sexo']."</td><td>";
    	echo $fila['FechaNac']."</td><td>";
    	echo $fila['Club']."</td><td>";
    	echo $fila['Equipo']."</td><td></tr></table>";
    	echo "<br>";
	}
	
	//mysqli_close($conexion);
	
	$conexion->close();

	?>

</body>
</html>