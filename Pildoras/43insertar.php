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
        <title>Vídeo 43</title>

<?php
function inserta_valores($codigo, $cuadro,$pintor,$pinacoteca){

require("40conexion.php");
$conexion=mysqli_connect($db_host, $db_usuario,$db_contra);

if (mysqli_connect_errno()){
    echo "Fallo al conectar con la base de datos";
    exit();
}
mysqli_select_db($conexion,$db_nombre) or die("No se encuentr la BBDD");

mysqli_set_charset($conexion,"utf8"); 

$consulta="insert into cuadro (CodCuadro,Ncuadro, NPintor,NPinacoteca)
values ($codigo, '$cuadro', '$pintor','$pinacoteca')";

if (mysqli_query($conexion,$consulta)){
     echo "Registro añadido adecuadamente<br/>";
     echo "El registro siguiente: <br/> Código: $codigo <br/> Cuadro:$cuadro <br/> Pintor: $pintor <br/>Pinacoteca:  $pinacoteca ";

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
        $pintor=$_GET['pintor'];
        $pinacoteca=$_GET['pinacoteca'];
        $codigo=$_GET['codigo'];
        $cuadro=$_GET['cuadro'];
        
         inserta_valores($codigo, $cuadro,$pintor,$pinacoteca);
       }else if(isset($_GET['borrar']) || !isset($_GET['enviando'])){

        echo "<form action='$mipagina' method='get'>
            <label>Codigo:<input type='text' name='codigo'></label><br/>
            <label>Cuadro:<input type='text' name='cuadro'></label><br/>
            <label>Pintor:<input type='text' name='pintor'></label><br/>
            <label>Pinacoteca:<input type='text' name='pinacoteca'></label><br/>
            <input type='submit' name='enviando' value='Dale!'>
            <input type='submit' name='borrar' value='Borrar'>
            </form>";       
       }
            
    ?>
    
</body>
</html>