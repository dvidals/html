<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
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

$consulta="select * from pintor"; /* where npintor='Picasso'";*/

$resultados=mysqli_query($conexion,$consulta);
$fila=mysqli_fetch_row($resultados);

foreach($resultados as $fila){
    foreach ($fila as $valor2){
        echo $valor2. " ";
    }
    echo "<br/>";

}

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
