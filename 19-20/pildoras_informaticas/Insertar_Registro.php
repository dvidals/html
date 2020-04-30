<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

</head>
<body>
<?php
 $dorsal=$_GET['dorsal'];
 $nombre=$_GET['nombre'];
 $apellidos=$_GET['apellidos'];
 $federado=$_GET['federado'];
 $licencia=$_GET['licencia'];
 $categoria=$_GET['categoria'];
 $sexo=$_GET['sexo'];
 $fechanac=$_GET['fechanac'];
 $club=$_GET['club'];
 $equipo=$_GET['equipo'];


 require "configuracion.php";

 $conexion=mysqli_connect($db_host,$db_usuario,$db_contra);//se puede poner como 4º argumento $db_nombre y omitir el mysqli_select_db.

 if(mysqli_connect_errno()){

    echo "Fallo al conectar con la BBDD";
    exit(); //para que no siga ejecutando el resto del código de abajo
 }

 mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
 
 mysqli_set_charset($conexion, "utf8"); //para el español, tildes y eñes.

 
 $consulta="insert into tabla (Dorsal, Nombre, Apellidos, Federado, Licencia, Categoria_Prueba, Sexo, FechaNac, Club, Equipo) values 
 ($dorsal,'$nombre','$apellidos','$federado', '$licencia', '$categoria', '$sexo', '$fechanac', '$club', '$equipo')";

 $resultados=mysqli_query($conexion,$consulta);
 
if ($resultados==false){
    echo "Error en la inserción";
}else{
    echo "Registro guardado<br><br>";
    echo "<table><tr><td>$dorsal</td></tr>";
    echo "<tr><td>$nombre</td></tr>";
    echo "<tr><td>$apellidos</td></tr>";
    echo "<tr><td>$federado</td></tr>";
    echo "<tr><td>$licencia</td></tr>";
    echo "<tr><td>$categoria</td></tr>";
    echo "<tr><td>$sexo</td></tr>";
    echo "<tr><td>$fechanac</td></tr>";
    echo "<tr><td>$club</td></tr>";
    echo "<tr><td>$equipo</td></tr></table>";

}
 mysqli_close($conexion);


?>

</body>

</html>
