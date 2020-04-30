<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style>

    tr{
        color: red;
        /*width:50%;*/
        border:1px dotted #ff0000;
        /*margin: auto;*/
        
    }
</style>
</head>
<body>
<?php
 
 //include "configuracion.php";
 require "configuracion.php";

 $conexion=mysqli_connect($db_host,$db_usuario,$db_contra);//se puede poner como 4º argumento $db_nombre y omitir el mysqli_select_db.

 if(mysqli_connect_errno()){

    echo "Fallo al conectar con la BBDD";
    exit(); //para que no siga ejecutando el resto del código de abajo
 }

 mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
 
 mysqli_set_charset($conexion, "utf8"); //para el español, tildes y eñes.

 //$consulta="select * from datospersonales where edad>20";
 $consulta="select * from tabla order by dorsal asc";

 $resultados=mysqli_query($conexion,$consulta);
 
 //$fila=mysqli_fetch_row($resultados);

 /*foreach ($fila as $valor){
    echo $valor."<br>";
 }
*/
 //echo $fila[0];

echo "<table>";
 do{
 echo "<tr>";
 /*foreach ($fila as $valor)*/foreach ($fila as $clave=>$valor){
     echo"<td>";
     //echo $valor;
     echo $fila[$clave];
     echo "</td>";
 }
echo "</tr>";
 } //while ($fila=mysqli_fetch_row($resultados));
 while ($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC));
 echo "</table>";

 mysqli_close($conexion);

?>

</body>

</html>

