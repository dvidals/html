<?php

//Recibimos los datos de la imagen: name, type, size, tmp_name, error. $_FILES guarda los datos que no sean texto (es como $_GET o $_POST, pero para archivos)
$nombre_imagen=$_FILES['imagen']['name'];
$tipo_imagen=$_FILES['imagen']['type'];
$tamagno_imagen=$_FILES['imagen']['size'];

//echo $tipo_imagen;

if($tamagno_imagen<=1000000){
    if($tipo_imagen=="image/jpeg"||$tipo_imagen=="image/jpg"||$tipo_imagen=="image/png"||$tipo_imagen=="image/gif"){
//Ruta de la carpeta destino en servidor:
$carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/intranet/img/';
//línea de código para mover desde la carpeta temporal a la carpeta del servidor la imagen seleccionada:
move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_destino.$nombre_imagen);
header ("Location:crud_productos.php");
    }else{
		echo "Sólo se pueden subir imágenes jpg/jpeg/png/gif";
		echo "<h2><a href='crud_productos.php'>Volver</a></h2>";
	}
}
else{
	echo "El tamaño de la imagen es demasiado grande, excede el límite permitido";
	echo "<h2><a href='crud_productos.php'>Volver</a></h2>";
}

?>