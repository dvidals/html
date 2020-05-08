<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Subir Imágenes</title>
</head>

<body>

<?php

require("configuracion.php");
$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);//se puede poner como 4º argumento $db_nombre y omitir el mysqli_select_db.

 if(mysqli_connect_errno()){

    echo "Fallo al conectar con la BBDD";
    exit(); //para que no siga ejecutando el resto del código de abajo
 }

 mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
 
 mysqli_set_charset($conexion, "utf8"); //para el español, tildes y eñes.

 $consulta="select FOTO from tabla where Dorsal=666";
 $resultado=mysqli_query($conexion,$consulta);
 while($fila=mysqli_fetch_array($resultado)){
     $ruta_img=$fila["FOTO"];
 }

?>

<div>
 <img src="/intranet/uploads/<?php echo $ruta_img;?>" alt="Imagen del primer artículo" width="25%"/>

</div>
</body>
</html>
