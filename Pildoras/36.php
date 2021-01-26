<html>
<head>
<meta charset="utf-8">
<title>Vídeo 36</title>
<style>
    table, th, tr, td{
        width: 50%;
        border: 2px solid #FF0000;
        margin:auto;
    }

    td {
        color:blue;
    }

</style>
</head>
<body>
<?php

$db_host="localhost";
$db_usuario="root";
$db_contra="root";
$db_nombre="pinacoteca";

$conexion=mysqli_connect($db_host, $db_usuario,$db_contra/*,$db_nombre*/);

if (mysqli_connect_errno()){ // se ejecuta esa función cuando no hay éxito en la conexión a la BD.

    echo "Fallo al conectar con la base de datos";
    exit(); // la usamos para que no ejecute el resto del código.
}

mysqli_select_db($conexion,$db_nombre) or die("No se encuentr la BBDD");

mysqli_set_charset($conexion,"utf8"); //para que muestre bien las tildes, etc. (caracteres latinos);

$consulta="select * from pintor where (PaisPintor='España' AND NPintorMaestro is null) order by CiudadPintor desc limit 3"; /* where npintor='Picasso'";*/

$resultados=mysqli_query($conexion,$consulta);
$fila=mysqli_fetch_row($resultados);
echo "<table>";
echo"<tr><th>Npintor</th><th>Ciudadpintor</th><th>PaisPintor</th><th>Fnac</th><th>Ffall</th><th>NombreE</th><th>NPintorMaestro</th></tr>";
foreach($resultados as $fila){
    echo "<tr>";
    foreach ($fila as $valor2){
        echo "<td>$valor2</td>";
    }
    echo "</tr>";

}
echo "</table>";

/* otra forma
while ($fila=mysqli_fetch_row($resultados)==true){
    echo $fila [0]." ";
    echo $fila [1]." ";
    echo $fila [2]." ";
    echo $fila [3]." ";
    echo "<br>";
}

*/

//cerrar conexion:

mysqli_close($conexion);

?>

</body>
</html>
