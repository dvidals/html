<html>
<head>
<style>
    table, th, tr, td{
        border: 2px solid #FF0000;
        margin:auto;
    }

    td {
        color:blue;
    }

</style>
<meta charset="utf-8">
        <title>Vídeo 41</title>

<?php

function ejecuta_consulta($labusqueda){

if (strlen($labusqueda)>=3){

require("40conexion.php");
$conexion=mysqli_connect($db_host, $db_usuario,$db_contra);

if (mysqli_connect_errno()){
    echo "Fallo al conectar con la base de datos";
    exit();
}

mysqli_select_db($conexion,$db_nombre) or die("No se encuentr la BBDD");

mysqli_set_charset($conexion,"utf8"); 


$consulta="select * from cuadro where Npintor like '%$labusqueda%'";

$resultados=mysqli_query($conexion,$consulta);


$fila=mysqli_fetch_array($resultados); 

echo "<table>";
echo"<tr><th>Ncuadro</th><th>Tecnica</th><th>Npintor</th><th>Npinacoteca</th></tr>";
foreach($resultados as $clave=> $fila){
    echo "<tr>";

        echo "<td>".$fila['Ncuadro']."</td>";
        echo "<td>".$fila['Tecnica']."</td>";
        echo "<td>".$fila['NPintor']."</td>";
        echo "<td>".$fila['NPinacoteca']."</td>";
    
    echo "</tr>";

}
echo "</table>";
mysqli_close($conexion);

}else {
    echo "Ponte las pilas, escribe al menos pasa 3 caracteres para poder hacer la búsqueda";
}
}

?>
</head>
<body>
    <?php
       $mipagina=$_SERVER["PHP_SELF"];
       if(isset($_GET['buscar'])){ // si el isset lo sustituimos por no !empty no nos funcionaría para el caso en el que no se escribieran nada en el cuadro de texto
        // No saldría el mensaje de error "Ponte las pila, ... Esto es debido a que al estar vacío en vez de ejecutar la función saltaría al else y volvería a carga la página. En
        // vez de ejecutar la función. Con isset aunque no se ponga nada en el cuadro de texto si se le da al botón el $_GET['buscar'] ya es una variable definida  y distinta de nulo.
        // Si pusiéramos antes la línea 73 a la 69 nos saldría un NOTICE la primera vez que se muestra la página, el siguiente: undifined index buscar ... El término 'buscar' en el
        // $_GET['buscar'] no está definido porque todavía no se ha ejecutado el formulario y por lo tanto el texto del cuadro del texto no ha pasado al $_GET. 
        $buscar=$_GET['buscar'];
         ejecuta_consulta($buscar);
        }else{
            echo "<form action='$mipagina' method='get'>
            <label>Buscar:<input type='text' name='buscar'></label>
            <input type='submit' name='enviando' value='Dale!'>
            </form>";
           
            

        }

    
    ?>
    
</body>
</html>