<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Blog Píldoras</title>
<style>

</style>
</head>

<body>
<h2>Blog</h2>
<hr/>
<?php
 include ("../modelo/Manejo_Objetos.php");
 try{

    $miconexion=new PDO('mysql:host=localhost;dbname=bbddblog','root','');
    $miconexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $Manejo_Objetos=new Manejo_Objetos($miconexion);
    $tabla_blog=$Manejo_Objetos->getContenidoPorFecha();
    if(empty($tabla_blog)) echo "No hay entradas de blog aún";
    else{
        foreach($tabla_blog as $valor){
            echo "<h3>".$valor->getTitulo()."</h3>";
            echo "<h4>".$valor->getFecha()."</h4>";
            echo "<div style='width:400px'>".$valor->getComentario()."</div>";
            if($valor->getImagen()!="") echo "<img src='../imagenes/".$valor->getImagen()."'width='300px' height='200px'/>";
            echo "<hr/>";
        }
    }


}catch (Exception $e){

    die ("Error: ". $e->getMessage());

}

/*
if(!$miconexion){
    echo "La conexión ha fallado: ".mysqli_error($miconexion);
    exit();
}
$miconsulta="select * from contenido order by Fecha desc";

if($resultado=mysqli_query($miconexion,$miconsulta)){

    while($registro=mysqli_fetch_assoc($resultado)){
        echo "<h3>".$registro['Titulo']."</h3>";
        echo "<h4>".$registro['Fecha']."</h4>";
        echo "<div style='width:400px'>".$registro['Comentario']."</div><br/><br/>";
        if($registro['Imagen']!=="")echo "<img src='imagenes/".$registro['Imagen']."' width='300px'/>";
        echo "<hr/>";
    }
}
*/

?>
<br/>
<a href="Formulario.php">Añadir nueva entrada</a>

</body>
</html>