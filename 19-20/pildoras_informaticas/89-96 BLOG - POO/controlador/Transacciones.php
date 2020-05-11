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

include_once("../modelo/Objeto_Blog.php");
include_once("../modelo/Manejo_Objetos.php");

try{

    $miconexion=new PDO('mysql:host=localhost;dbname=bbddblog','root','');
    $miconexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);



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
     $destino_de_ruta="../imagenes/";
     move_uploaded_file($_FILES['imagen']['tmp_name'],$destino_de_ruta.$_FILES['imagen']['name']);
     echo "El archivo ". $_FILES['imagen']['name']." se ha copiado en el directorio de imágenes";
 }else echo "El archivo no se ha podido copiar al directorio de imágenes";
}

$Manejo_Objetos=new Manejo_Objetos($miconexion);
$blog=new Objeto_Blog();
$blog->setTitulo(htmlentities(addslashes($_POST['campo_titulo']),ENT_QUOTES));
//el htmlentities se hace para el addslashes, para evitar la inyección sql
$blog->setFecha(Date("Y-m-d H:i:s"));
$blog->setComentario(htmlentities(addslashes($_POST['area_comentarios']),ENT_QUOTES));
$blog->setImagen($_FILES['imagen']['name']);

$Manejo_Objetos->insertaContenido($blog);

echo "<br/> Entrada de blog agregada con éxito <br/>";

}catch (Exception $e){

    die ("Error: ". $e->getMessage());

}

?>
<br/>
<a href="../vista/Formulario.php">Añadir nueva entrada</a>
<br/><br/>
<a href="../vista/Mostrar_Blog.php">Ver Blog</a>

</body>
</html>