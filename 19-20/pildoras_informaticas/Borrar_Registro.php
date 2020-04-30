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

 
 $consulta="delete from tabla where Dorsal=$dorsal"; //importante: $dorsala iría entre comillas simples si fuese varchar y no numérico.
 

 $resultados=mysqli_query($conexion,$consulta);
 
if ($resultados==false){
    echo "Error en la consulta";
}else{
    //echo "Registro eliminado";
    //echo mysqli_affected_rows($conexion);
    if (mysqli_affected_rows($conexion)==0){
        echo "No hay registros que eliminar con ese criterio";
    } else if (mysqli_affected_rows($conexion)==1){
        echo "Se ha elminado ". mysqli_affected_rows($conexion)." registro";
    }else echo "Se han elminado ". mysqli_affected_rows($conexion)." registros";

}
 mysqli_close($conexion);


?>

</body>

</html>
