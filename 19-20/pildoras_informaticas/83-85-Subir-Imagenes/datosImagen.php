<?php

//Recibimos los datos de la imagen: name, type, size, tmp_name, error. $_FILES guarda los datos que no sean texto (es como $_GET o $_POST, pero para archivos)
$nombre_imagen=$_FILES['imagen']['name'];
$tipo_imagen=$_FILES['imagen']['type'];
$tamagno_imagen=$_FILES['imagen']['size'];

//echo $tipo_imagen;

if($tamagno_imagen<=1000000){
    if($tipo_imagen=="image/jpeg"||$tipo_imagen=="image/jpg"||$tipo_imagen=="image/png"||$tipo_imagen=="image/gif"){
//Ruta de la carpeta destino en servidor:
$carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/intranet/uploads/';
//línea de código para mover desde la carpeta temporal a la carpeta del servidor la imagen seleccionada:
move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_destino.$nombre_imagen);
    }else echo "Sólo se pueden subir imágenes jpg/jpeg/png/gif";
}
else echo "El tamaño de la imagen es demasiado grande, excede el límite permitido";

require "configuracion.php";

 $conexion=mysqli_connect($db_host,$db_usuario,$db_contra);//se puede poner como 4º argumento $db_nombre y omitir el mysqli_select_db.

 if(mysqli_connect_errno()){

    echo "Fallo al conectar con la BBDD";
    exit(); //para que no siga ejecutando el resto del código de abajo
 }
/*
 mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
 
 mysqli_set_charset($conexion, "utf8"); //para el español, tildes y eñes.

 
 $sql="update tabla set FOTO='$nombre_imagen' where Dorsal=666";

 $resultados=mysqli_query($conexion,$sql);

*/
?>