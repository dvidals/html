<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

</head>
<body>
<?php

 
 require "configuracion.php";

 $conexion=mysqli_connect($db_host,$db_usuario,$db_contra);//se puede poner como 4º argumento $db_nombre y omitir el mysqli_select_db.

 if(mysqli_connect_errno()){

    echo "Fallo al conectar con la BBDD";
    exit(); //para que no siga ejecutando el resto del código de abajo
 }

 mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
 
 mysqli_set_charset($conexion, "utf8"); //para el español, tildes y eñes.

 
 $consulta="insert into tabla (Dorsal, Nombre, Apellidos, Club) values (669,'Katia','Silva González','A.D. Punta Fondón')";

 $resultados=mysqli_query($conexion,$consulta);
 

 mysqli_close($conexion);


?>

</body>

</html>
