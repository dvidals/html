<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Resultados Categoría "Consultas Preparadas"</title>
</head>
<body>
<?php

 $dorsal=$_GET['dorsal'];
 $nombre=$_GET['nombre'];
 $apellidos=$_GET['apellidos'];
 $federado=$_GET['federado'];
 $licencia=$_GET['licencia'];	
 $categoria=$_GET["categoria"];
 $sexo=$_GET['sexo'];
 $fechanac=$_GET['fechanac'];
 $club=$_GET['club'];
 $equipo=$_GET['equipo'];

 //include "configuracion.php";
 require "configuracion.php";

 $conexion=mysqli_connect($db_host,$db_usuario,$db_contra);//se puede poner como 4º argumento $db_nombre y omitir el mysqli_select_db.

 if(mysqli_connect_errno()){

    echo "Fallo al conectar con la BBDD";
    exit(); //para que no siga ejecutando el resto del código de abajo
 }

 mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
 
 mysqli_set_charset($conexion, "utf8"); //para el español, tildes y eñes.

 
 $sql="insert into tabla (Dorsal,Nombre,Apellidos, Federado, Licencia, Categoria_Prueba, Sexo, FechaNac,Club,Equipo) 
 values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";


 $resultados=mysqli_prepare($conexion,$sql);

 $ok=mysqli_stmt_bind_param($resultados,"isssssssss",$dorsal,$nombre,$apellidos,$federado,$licencia,$categoria,$sexo,$fechanac,$club,$equipo); //s:significa texto (la categoría es un campo texto), i sería para enteros y de para decimales/reales
 $ok=mysqli_stmt_execute($resultados);//con este nuevo $ok machacamos el anterior el objeto Mysqli_smt que está almacenado en $resultados

 if($ok==false){
	echo "Error al ejecutar la consulta";
	}else{
	
		/*$ok=mysqli_stmt_bind_result($resultados,$dorsal,$nombre,$apellidos,$categoria,$fechanac);
		echo "Artículos encontrados: <br><br>";

		 while(mysqli_stmt_fetch($resultados)){

		echo $dorsal. " ". $nombre. " ".$apellidos." ".$categoria." ".$fechanac."<br>"; 

		 }*/


//El while en este caso no tiene ningún sentido porque no queremos mostrar ningún registro en pantalla, en el ejemplo anterior
// si porque buscamos los registros que cumplían una condición.

	
	
    echo "Agregado nuevo registro:<br>";

	echo $dorsal." ".$nombre." ".$apellidos." ".$federado." ".$licencia." ".$categoria." ".$sexo." ".$fechanac." ".$club." ".$equipo;

	mysqli_stmt_close($resultados);	

	}
 
 
    
    

 //mysqli_close($conexion);

?>

</body>

</html>

