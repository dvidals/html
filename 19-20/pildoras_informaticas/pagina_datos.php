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
 $usuario=$_GET['usu'];
 $contra=$_GET["con"];
 //include "configuracion.php";
 require "configuracion.php";

 $conexion=mysqli_connect($db_host,$db_usuario,$db_contra);//se puede poner como 4º argumento $db_nombre y omitir el mysqli_select_db.

 if(mysqli_connect_errno()){

    echo "Fallo al conectar con la BBDD";
    exit(); //para que no siga ejecutando el resto del código de abajo
 }

 mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
 
 mysqli_set_charset($conexion, "utf8"); //para el español, tildes y eñes.

 
 $consulta="select * from USUARIOS where USUARIO='$usuario' and CONTRA='$contra'";
 echo"$consulta<br><br>";

 $resultados=mysqli_query($conexion,$consulta);
 
 while ($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC)){
     echo "Bienvenido $usuario <br> Estos son tus datos:<br>";
    echo "<table><tr><td>";
    echo $fila['usuario']."</td><td>";
    echo $fila['contra']."</td><td>";
    echo $fila['tfno']."</td><td>";
    echo $fila['direccion']."</td><td></tr></table>";
    echo "<br>";


 }



 mysqli_close($conexion);

?>

</body>

</html>

