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
        <title>Vídeo 44</title>

<?php
function borra_valor($codigo){

require("40conexion.php");
$conexion=mysqli_connect($db_host, $db_usuario,$db_contra);

if (mysqli_connect_errno()){
    echo "Fallo al conectar con la base de datos";
    exit();
}
mysqli_select_db($conexion,$db_nombre) or die("No se encuentr la BBDD");

mysqli_set_charset($conexion,"utf8"); 
$consulta2="select CodCuadro, Ncuadro, NPintor, NPinacoteca from cuadro where CodCuadro=$codigo";
$resultados2=mysqli_query($conexion,$consulta2);
$fila2=mysqli_fetch_row($resultados2);
foreach($fila2 as $valor2){
    $codigoEnBD= $fila2[0];
    $cuadro= $fila2[1];
    $pintor= $fila2[2];
    $pinacoteca= $fila2[3];
}

/* Se podría hacer también con la función mysqli_fech_array, sería el siguiente código:
$fila2=mysqli_fetch_array($resultados2);
foreach($resultados2 as $clave=> $fila){
       $codigo= $fila2['CodCuadro'];
       $cuadro= $fila2['Ncuadro'];
       $pintor= $fila2['NPintor'];
       $pinacoteca= $fila2['NPinacoteca'];
}
    */
   
$consulta="delete from cuadro where CodCuadro=$codigo";
mysqli_query($conexion,$consulta);

    if (mysqli_affected_rows($conexion)>0){
     /*if (!is_null($cuadro)){ // Para que falle cuando queremos eliminar un registro con un código de cuadro que no existe podemos poner
        // dentro del is_null cualquier variable que definimos en el foreach, porque ninguna se podría asignar porque la consulta nos daría cero filas.
        // en cambio si en el is_null ponemos el las variables consulta o resultado, éstas, aunque no dan ningún valor, tampoco son falsas, ni nulas, son arrays vacios.
        //Por lo que no nos valdrían, así como tammpoco nos valdría como condición mysqli_query($conexion,$consulta) como habíamos hecho en otros ejercicios, por 
        //una cuestión similar, la condición no es falsa aunque no nos de ningún valor, afecta a cero filas, pero eso no es equivalente a que la consulta sea errónea/falsa.

        //La forma correcta de hacerlo sería con mysqli_affected_rows($conexion);*/
    
     echo "Registro eliminado adecuadamente<br/>";
     echo "El registro siguiente: <br/>";
     echo" Código: $codigoEnBD<br/>";
     echo" Cuadro: $cuadro<br/>";
     echo" Pintor: $pintor<br/>";
     echo" Pinacoteca: $pinacoteca<br/>";
     echo mysqli_affected_rows($conexion)." registros eliminados";

     

}else{  
    echo "Ha habido un error<br/>";
   echo  mysqli_error($conexion);
}
mysqli_close($conexion);
}
?>
</head>
<body>
    <?php
       $mipagina=$_SERVER["PHP_SELF"];

       if(isset($_GET['enviando'])){ 
        $codigo=$_GET['codigo'];
         borra_valor($codigo);
       }else if(isset($_GET['borrar']) || !isset($_GET['enviando'])){

        echo "<form action='$mipagina' method='get'>
            <label>Codigo:<input type='text' name='codigo'></label><br/>
            <input type='submit' name='enviando' value='Dale!'>
            <input type='submit' name='borrar' value='Borrar'>
            </form>";       
       }
            
    ?>
    
</body>
</html>