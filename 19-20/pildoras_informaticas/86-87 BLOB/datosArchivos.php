<?php

//Recibimos los datos de la imagen: name, type, size, tmp_name, error. $_FILES guarda los datos que no sean texto (es como $_GET o $_POST, pero para archivos)
$nombre_archivo=$_FILES['archivo']['name'];
$tipo_archivo=$_FILES['archivo']['type'];
$tamagno_archivo=$_FILES['archivo']['size'];

//echo $tipo_imagen;

if($tamagno_archivo<=1000000){
//Ruta de la carpeta destino en servidor:
$carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/intranet/uploads/';
//línea de código para mover desde la carpeta temporal a la carpeta del servidor la imagen seleccionada:
move_uploaded_file($_FILES['archivo']['tmp_name'],$carpeta_destino.$nombre_archivo);
    
}
else echo "El tamaño es demasiado grande, excede el límite permitido";

require "configuracion.php";

 $conexion=mysqli_connect($db_host,$db_usuario,$db_contra);//se puede poner como 4º argumento $db_nombre y omitir el mysqli_select_db.

 if(mysqli_connect_errno()){

    echo "Fallo al conectar con la BBDD";
    exit(); //para que no siga ejecutando el resto del código de abajo
 }

 mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
 
 mysqli_set_charset($conexion, "utf8"); //para el español, tildes y eñes.

 $archivo_objetivo=fopen($carpeta_destino.$nombre_archivo,"r");
 $contenido=fread($archivo_objetivo,$tamagno_archivo);
 $contenido=addslashes($contenido);

 fclose($archivo_objetivo);

//$sql="update tabla set FOTO='$nombre_archivo' where Dorsal=666";

$sql="insert into archivos (Id, Nombre, Tipo, Contenido) values (0,'$nombre_archivo','$tipo_archivo','$contenido')";

 $resultados=mysqli_query($conexion,$sql);

 if(mysqli_affected_rows($conexion)>0) echo "Se ha insertado el registro con éxito";
 else echo "No se ha podido insertar el registro";


?>