<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style>

    table{
        color: red;
        width:60%;
        border:1px dotted #ff0000;
        margin: auto;
        
    }
</style>
</head>
<body>
<?php
 
 //include "configuracion.php";
 require "configuracion.php";

 $conexion=mysqli_connect($db_host,$db_usuario,$db_contra);//se puede poner como 4º argumento $db_nombre y omitir el mysqli_select_db.
 
 $usuario= mysqli_real_escape_string($conexion,$_GET['usu']);
 $contra= mysqli_real_escape_string($conexion, $_GET["con"]);
 
 if(mysqli_connect_errno()){

    echo "Fallo al conectar con la BBDD";
    exit(); //para que no siga ejecutando el resto del código de abajo
 }

 mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
 
 mysqli_set_charset($conexion, "utf8"); //para el español, tildes y eñes.

 
 $consulta="delete from USUARIOS where USUARIO='$usuario' and CONTRA='$contra'";
 echo"$consulta<br><br>";

/*if (mysqli_query($conexion,$consulta)){

echo "Baja procesada";
}*/
 
mysqli_query($conexion,$consulta);
if(mysqli_affected_rows($conexion)>0){

    echo "Baja procesada";

}else{

    echo "No se ha encontrado usuario a borrar";

}

 mysqli_close($conexion);

?>

</body>

</html>

