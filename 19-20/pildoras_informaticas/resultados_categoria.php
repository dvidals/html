<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Resultados Categoría "Consultas Preparadas"</title>
</head>
<body>
<?php
 $categoria=$_GET["buscar"];
 //include "configuracion.php";
 require "configuracion.php";

 $conexion=mysqli_connect($db_host,$db_usuario,$db_contra);//se puede poner como 4º argumento $db_nombre y omitir el mysqli_select_db.

 if(mysqli_connect_errno()){

    echo "Fallo al conectar con la BBDD";
    exit(); //para que no siga ejecutando el resto del código de abajo
 }

 mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
 
 mysqli_set_charset($conexion, "utf8"); //para el español, tildes y eñes.

 
 $sql="select Dorsal,Nombre,Apellidos,Categoria_Prueba,FechaNac from tabla where Categoria_Prueba=?";


 $resultados=mysqli_prepare($conexion,$sql);

 $ok=mysqli_stmt_bind_param($resultados,"s",$categoria); //s:significa texto (la categoría es un campo texto), i sería para enteros y de para decimales/reales
 $ok=mysqli_stmt_execute($resultados);//con este nuevo $ok machacamos el anterior el objeto Mysqli_smt que está almacenado en $resultados

 if($ok==false){
	echo "Error al ejecutar la consulta";
	}else{
	
		$ok=mysqli_stmt_bind_result($resultados,$dorsal,$nombre,$apellidos,$categoria,$fechanac);
		echo "Artículos encontrados: <br><br>";

		while(mysqli_stmt_fetch($resultados)){

		echo $dorsal. " ". $nombre. " ".$apellidos." ".$categoria." ".$fechanac."<br>";
	}

	mysqli_stmt_close($resultados);	

	}
 
 
    
    

 //mysqli_close($conexion);

?>

</body>

</html>

