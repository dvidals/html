<?php 
	/*comprueba que el usuario haya abierto sesión o redirige*/
	//require 'sesiones.php';
	require 'bd.php';
	//comprobar_sesion();
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CRUD</title>
<link rel="stylesheet" type="text/css" href="hoja.css">


</head>

<body>
<?php

include ("conexion.php");
/*
$res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
$bd = new PDO($res[0], $res[1], $res[2]);
*/
//-------------------PAGINACIÓN-----------------------

  $limite=3;

    if (isset($_GET["pagina"])){
    if($_GET["pagina"]==1)header("Location:crud_usuarios.php");
    else $pagina=$_GET["pagina"];
    }else $pagina=1;
  
  
  $sql_total="select * from usuarios";

  $resultado=$bd->prepare($sql_total);
  $resultado->execute(array());
  $num_filas=$resultado->rowCount();//si utilizase esta variable en vez de contador me ahorraría el primer bucle while.
  $total_paginas=$num_filas/$limite;

  $paginas=ceil($num_filas/$limite);
  $inicio=($pagina-1)*$limite;

  

  //--------------------------------------------------


//$registros=$base->query("select * from datos_usuarios limit $inicio,$limite")->fetchAll(PDO::FETCH_OBJ);
$registros=$bd->query("select * from usuarios limit $inicio, $limite")->fetchAll(PDO::FETCH_OBJ);

//$registros=registros();

if(isset($_POST['cr'])){
	
  $Correo=$_POST['cor'];
  $Clave=$_POST['cla'];
  $Modificada=$_POST['mod'];
  $Pais=$_POST['pai'];
  $CP=$_POST['cp'];
  $Ciudad=$_POST['ciu'];
  $Direccion=$_POST['dir'];
  $Tipo=$_POST['tip'];

  insertar_usuarios($Correo,$Clave,$Modificada,$Pais,$CP,$Ciudad,$Direccion,$Tipo);
  
  header("Location:crud_usuarios.php");


}


 



?>

<h1>CRUD<span class="subtitulo">Create Read Update Delete</span></h1>
<?php
var_dump($registros);
?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

  <table width="50%" border="0" align="center">
    <tr >
      <td class="primera_fila">CodRes</td>
      <td class="primera_fila">Correo</td>
      <td class="primera_fila">Clave</td>
      <td class="primera_fila">Modificada</td>
	  <td class="primera_fila">Pais</td>
	  <td class="primera_fila">CP</td>
	  <td class="primera_fila">Ciudad</td>
	  <td class="primera_fila">Direccion</td>
	  <td class="primera_fila">Tipo</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
    </tr> 
   

    <?php

    foreach ($registros as $persona):?>



  

    
		
   	<tr>
      <td><?php echo $persona->CodRes; ?> </td>
      <td><?php echo $persona->Correo; ?> </td>
      <td><?php echo $persona->Clave; ?> </td>
      <td><?php echo $persona->Modificada; ?> </td>
	  <td><?php echo $persona->Pais; ?> </td>
      <td><?php echo $persona->CP; ?> </td>
      <td><?php echo $persona->Ciudad; ?> </td>
	  <td><?php echo $persona->Direccion; ?> </td>
      <td><?php echo $persona->Tipo; ?> </td>
    
 
      <!-- <td class="bot"><?php $CodRes=$persona->CodRes; borrar($CodRes);?><input type='button' name='del' id='del' value='Borrar'></td> -->
	   <td class="bot"><a href="borrar_usuarios.php?CodRes=<?php echo $persona->CodRes?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
      <td class='bot'><a href="editar_usuarios.php?CodRes=<?php echo $persona->CodRes?> & Correo=<?php echo $persona->Correo?> & Clave=<?php echo $persona->Clave?> & Modificada=<?php echo $persona->Modificada?> & Pais=<?php echo $persona->Pais?>& CP=<?php echo $persona->CP?> & Ciudad=<?php echo $persona->Ciudad?> & Direccion=<?php echo $persona->Direccion?>  & Tipo=<?php echo $persona->Tipo?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>
    </tr>       

<?php

    endforeach;
	

?>


	<tr>
	<td></td>
      <td><input type='text' name='cor' size='20' class='centrado'></td>
      <td><input type='text' name='cla' size='20' class='centrado'></td>
      <td><input type='text' name=' mod' size='20' class='centrado'></td>
	  <td><input type='text' name='pai' size='20' class='centrado'></td>
      <td><input type='text' name='cp' size='20' class='centrado'></td>
      <td><input type='text' name=' ciu' size='20' class='centrado'></td>
	  <td><input type='text' name='dir' size='20' class='centrado'></td>
      <td><input type='text' name=' tip' size='20' class='centrado'></td>
      <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td></tr>
      <tr><td></td><td colspan=3>Página<?php
//----------------------PAGINACIÓN-----------------
  for($i=1;$i<=$paginas;$i++){

echo "<a href='?pagina=".$i. "'>".$i."</a> ";
}

?>
</td></tr>    
  </table>

  </form>

<p>&nbsp;</p>
</body>
</html>