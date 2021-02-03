<?php




if  (!empty($_GET['borrar2'])) {
    $antiguo= array($_GET['antiguo0'],$_GET['antiguo1'], $_GET['antiguo2'],$_GET['antiguo3'] );
    echo "<form action='45actualizar2.php' method='get'>
    <label>Codigo:<input type='text' readonly='readonly' name='codigo2' value=".$_GET['codigo2']."></label><br/>
    <label>Cuadro:<input type='text' name='cuadro' value=''></label><br/>
    <label>Pintor:<input type='text' name='pintor'value=''></label><br/>
    <label>Pinacoteca:<input type='text' name='pinacoteca'value=''></label><br/>
    <input style='visibility: hidden' type='text' name='antiguo0'value=$antiguo[0]><br/>
    <input style='visibility: hidden' type='text' name='antiguo1'value='$antiguo[1]'><br/>
    <input style='visibility: hidden' type='text' name='antiguo2'value='$antiguo[2]'><br/>
    <input style='visibility: hidden' type='text' name='antiguo3'value='$antiguo[3]'><br/>
    <input type='submit' name='enviando2' value='Actualizar'>
    <input type='button' name='borrar2' value='Borrar'>

   </form>"; 


   }   
else{
    $antiguo= array($_GET['antiguo0'],$_GET['antiguo1'], $_GET['antiguo2'],$_GET['antiguo3'] );
    echo "Registro anterior: <br/> Código: $antiguo[0] <br/> Cuadro:$antiguo[1]  <br/> Pintor: $antiguo[2] <br/>Pinacoteca: $antiguo[3] <br/><br/> ";
    $array=array($_GET['codigo2'],$_GET['cuadro'], $_GET['pintor'],$_GET['pinacoteca'] );
   

   /*
   $codigo=$_GET['codigo2'];
   $cuadro=$_GET['cuadro'];
   $pintor=$_GET['pintor'];
   $pinacoteca=$_GET['pinacoteca'];*/
   require("40conexion.php");
   $conexion=mysqli_connect($db_host, $db_usuario,$db_contra);
   
   if (mysqli_connect_errno()){
       echo "Fallo al conectar con la base de datos";
       exit();
   }
   mysqli_select_db($conexion,$db_nombre) or die("No se encuentr la BBDD");
   
   mysqli_set_charset($conexion,"utf8"); 
$consulta="update cuadro set CodCuadro=$array[0], Ncuadro='$array[1]', NPintor='$array[2]', NPinacoteca='$array[3]' where CodCuadro=$array[0]";
if (mysqli_query($conexion,$consulta)){
    echo "Registro actualizado adecuadamente<br/>";
    echo "Registro actual: <br/> Código: $array[0] <br/> Cuadro:$array[1] <br/> Pintor: $array[2] <br/>Pinacoteca: $array[3] ";

}else{  
   echo "Ha habido un error<br/>";
  echo  mysqli_error($conexion);
}

mysqli_close($conexion);
}

?>