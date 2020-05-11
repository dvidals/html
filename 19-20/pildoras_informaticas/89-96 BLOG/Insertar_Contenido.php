<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Blog Píldoras</title>
<style>

</style>
</head>

<body>
<?php

$miconexion=mysqli_connect("localhost","root","","bbddblog");
$eltitulo=$_POST['campo_titulo'];
$lafecha=date("Y-m-d H:i:s");
$elcomentario=$_POST['area_comentarios'];
$laimagen=$_FILES['imagen']['name'];

//Comprobar conexión:

if(!$miconexion){
    echo "La conexión ha fallado: ".mysqli_error($miconexion);
    exit();
}

if($_FILES['imagen']['error']){

    switch($FILES['imagen']['error']){
        case 1://Error exceso de tamaño de archivo en php.ini
            echo "El tamaño del archivo excede lo permitido por el servidor";
        break;
        case 2://Error tamaño archivo marcado desde formulario
            echo "El tamaño del archivo excede 2MB";
        break;
        case 3: //Corrupción de archivo por estar sólo parcialmente subido
            echo "El envío del archivo se interumpió";
        break;
        case 4: // Ho hay fichero
            echo "No se ha enviado ningún archivo";
        break;
    }

}else{

 echo "Entrada subida correctamente<br/>";
 if((isset($_FILES['imagen']['name'])&&($_FILES['imagen']['error']==/*UPLOAD_ERR_OK*/0))){ //valdría las 2 opciones upload_err_ok o 0
     $destino_de_ruta="imagenes/";
     move_uploaded_file($_FILES['imagen']['tmp_name'],$destino_de_ruta.$_FILES['imagen']['name']);
     echo "El archivo ". $_FILES['imagen']['name']." se ha copiado en el directorio de imágenes";
 }else echo "El archivo no se ha podido copiar al directorio de imágenes";
}

$miconsulta="insert into contenido(Titulo,Fecha,Comentario,Imagen) values ('".$eltitulo."','".$lafecha."','".$elcomentario."','".$laimagen."')";

$resultado=mysqli_query($miconexion,$miconsulta);

//Cerramos la conexión

mysqli_close($miconexion);

echo "<br/> Se ha agregado el comentario/entrada con éxito.<br/><br/>";

?>
<a href="Formulario.php">Añadir nueva entrada</a>
<br/><br/>
<a href="Mostrar_Blog.php">Ver Blog</a>

</body>
</html>