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
 $busqueda=$_GET["buscar"];
 //include "configuracion.php";
 require "configuracion.php";

 $conexion=mysqli_connect($db_host,$db_usuario,$db_contra);//se puede poner como 4º argumento $db_nombre y omitir el mysqli_select_db.

 if(mysqli_connect_errno()){

    echo "Fallo al conectar con la BBDD";
    exit(); //para que no siga ejecutando el resto del código de abajo
 }

 mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
 
 mysqli_set_charset($conexion, "utf8"); //para el español, tildes y eñes.

 
 $consulta="select * from tabla where Nombre like'%$busqueda%'";

 $resultados=mysqli_query($conexion,$consulta);
 
 while ($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC)){
    //echo "<table><tr><td>";
    echo "<form action='Actualizar.php' method='get'>";
    
    echo "<input type='text' name='dorsal' value='".$fila['Dorsal']."'><br>";
    echo "<input type='text' name='nombre' value='".$fila['Nombre']."'><br>";
    echo "<input type='text' name='apellidos' value='".$fila['Apellidos']."'><br>";
    echo "<input type='text' name='federado' value='".$fila['Federado']."'><br>";
    echo "<input type='text' name='licencia' value='".$fila['Licencia']."'><br>";
    echo "<input type='text' name='categoria' value='".$fila['Categoria_Prueba']."'><br>";
    echo "<input type='text' name='sexo' value='".$fila['Sexo']."'><br>";
    echo "<input type='text' name='fechanac' value='".$fila['FechaNac']."'><br>";
    echo "<input type='text' name='club' value='".$fila['Club']."'><br>";
    echo "<input type='text' name='equipo' value='".$fila['Equipo']."'><br>";
    
    echo "<input type='submit' name='enviando' value='Actualizar!'>";

    echo "</form>";
    echo "<br>";


 }



 mysqli_close($conexion);

?>

</body>

</html>

