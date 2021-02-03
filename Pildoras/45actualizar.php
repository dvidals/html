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


function muestra_valor($codigo){

   

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

 
echo "<form action='45actualizar2.php' method='get'>
    
           <label>Codigo:<input type='text'readonly='readonly' name='codigo2' value=$fila2[0]></label><br/>
            <label>Cuadro:<input type='text' name='cuadro' value='$fila2[1]'></label><br/>
            <label>Pintor:<input type='text' name='pintor'value='$fila2[2]'></label><br/>
            <label>Pinacoteca:<input type='text' name='pinacoteca'value='$fila2[3]'></label><br/>
            <input style='visibility: hidden' type='text' name='antiguo0'value='$fila2[0]'><br/>
            <input style='visibility: hidden' type='text' name='antiguo1'value='$fila2[1]'><br/>
            <input style='visibility: hidden' type='text' name='antiguo2'value='$fila2[2]'><br/>
            <input style='visibility: hidden' type='text' name='antiguo3'value='$fila2[3]'><br/>
            <input type='submit' name='enviando2' value='Actualizar'>
            <input type='submit' name='borrar2' value='Borrar'>

           </form>"; 

          
   
   
       

mysqli_close($conexion);
}
?>
</head>
<body>
    <?php
       $mipagina=$_SERVER["PHP_SELF"];

       if(isset($_GET['enviando'])){ 
        $codigo=$_GET['codigo'];
         muestra_valor($codigo);
       }else if(isset($_GET['borrar']) || !isset($_GET['enviando'])){

        echo "<form action='$mipagina' method='get'>
            <label>Codigo:<input type='text' name='codigo'></label><br/>
            <input type='submit' name='enviando' value='Muestra datos'>
            <input type='submit' name='borrar' value='Borrar'>
            </form>";       
       }
            
    ?>
    
</body>
</html>