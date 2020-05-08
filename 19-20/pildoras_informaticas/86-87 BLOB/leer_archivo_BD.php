<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Leer Archivos BLOB</title>
</head>

<body>

<?php

$Id="";
$nombre="";
$contenido="";
$tipo="";

require("configuracion.php");
$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);//se puede poner como 4º argumento $db_nombre y omitir el mysqli_select_db.

 if(mysqli_connect_errno()){

    echo "Fallo al conectar con la BBDD";
    exit(); //para que no siga ejecutando el resto del código de abajo
 }

 mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
 
 mysqli_set_charset($conexion, "utf8"); //para el español, tildes y eñes.

 $consulta="select *  from archivos where Id=1";
 $resultado=mysqli_query($conexion,$consulta);
 while($fila=mysqli_fetch_array($resultado)){
     $Id=$fila["Id"];
     $nombre=$fila["Nombre"];
     $tipo=$fila["Tipo"];
     $contenido=$fila["Contenido"];
 }

 echo "Id: ".$Id."<br/>";
 echo "Nombre: ".$nombre."<br/>";
 echo "Tipo: ".$tipo."<br/>";
 echo "<img src='data:image/jpeg; base64,". base64_encode($contenido)."'>";
 

?>

<div>
 

</div>
</body>
</html>
