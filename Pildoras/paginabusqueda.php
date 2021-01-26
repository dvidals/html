<html>
<head>
<meta charset="utf-8">
<title>Página de Búsqueda</title>
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

//$consulta="select * from pintor where (PaisPintor='España' AND NPintorMaestro is null) order by CiudadPintor desc limit 3"; 
$consulta="select * from pintor where PaisPintor like '%ña%' AND NPintorMaestro is null order by CiudadPintor limit 3";

$resultados=mysqli_query($conexion,$consulta);

//$fila=mysqli_fetch_array($resultados,MYSQLI_ASSOC); La de abajo es equivalente a la del video 36 (36.php) y a está. Es equivalenta
// a mysqli_fetch_assoc(), y a mysqli_fetch_row().

$fila=mysqli_fetch_array($resultados); // Es igual cuando no se pone el seundo parámetro a : $fila=mysqli_fetch_array($resultados,MYSQLI_BOTH);


echo "<table>";
echo"<tr><th>Npintor</th><th>Ciudadpintor</th><th>Fnac</th></tr>";
foreach($resultados as $clave=> $fila){
    echo "<tr>";

        echo "<td>".$fila['Npintor']."</td>";
        echo "<td>".$fila['Ciudadpintor']."</td>";
        echo "<td>".$fila['Fnac']."</td>";
    
    echo "</tr>";

}
echo "</table>";

/* otra forma
while ($fila=mysqli_fetch_array($resultados,MYSQLI_ASSOC){
    echo "<table><tr><td>";
    echo $fila ['Npintor']." </td><td>";
    echo $fila ['Ciudadpintor']."</td><td>";
    echo $fila ['Fnac']."</td><td></tr></table>";
    echo "<br>";
}

*/

//cerrar conexion:

mysqli_close($conexion);

?>

</body>
</html>