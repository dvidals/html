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
require 'sesiones.php';
	require_once 'bd.php';
	comprobar_sesion();
require 'cabecera_admin.php';
//$conexion=$base->query("select * from datos_usuarios");
//almacenarlo en un array de objetos (esa consulta):

//$registros=$conexion->fetchAll(PDO::FETCH_OBJ); //dentro de registros ya tendríamos un array de objetos.

//Las dos líneas de código anteriores se pueden hacer en un único paso, el siguiente:

//-------------------PAGINACIÓN-----------------------

//$contador=0;
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

 /* while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
    $contador++;

  }
*/
  //--------------------------------------------------


$registros=$bd->query("select * from usuarios limit $inicio,$limite")->fetchAll(PDO::FETCH_OBJ);

if(isset($_POST['cr'])){

  $correo=$_POST['Cor'];
  $clave=$_POST['Cla'];
  $modificada=$_POST['Mod'];
  $pais=$_POST['Pai'];
  $cp=$_POST['CP'];
  $ciudad=$_POST['Ciu'];
  $direccion=$_POST['Dir'];
  $tipo=$_POST['Tip'];
  
  

  $sql="insert into usuarios (Correo, Clave, Modificada, Pais, CP, Ciudad, Direccion, Tipo) values (:cor, :cla, :mod, :pai, :cp, :ciu, :dir, :tip)";
  $resultado=$bd->prepare($sql);
  $resultado->execute(array(":cor"=>$correo,":cla"=>$clave,":mod"=>$modificada,":pai"=>$pais,":cp"=>$cp, ":ciu"=>$ciudad, ":dir"=>$direccion, ":tip"=>$tipo));
  header("Location:crud_usuarios.php");


}


 



?>

<h1>Gestión de Usuarios/Restaurantes</h1>


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
 
      <td class="bot"><a href="borrar_usuarios.php?CodRes=<?php echo $persona->CodRes?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
      <td class='bot'><a href="editar_usuarios.php?CodRes=<?php echo $persona->CodRes?> & cor=<?php echo $persona->Correo?> & cla=<?php echo $persona->Clave?> & mod=<?php echo $persona->Modificada?>& pai=<?php echo $persona->Pais?>& cp=<?php echo $persona->CP?>& ciu=<?php echo $persona->Ciudad?>& dir=<?php echo $persona->Direccion?>& tip=<?php echo $persona->Tipo?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>
    </tr>       

<?php

    endforeach;

?>


	<tr>
	<td></td>
      <td><input type='text' name='Cor' size='30' class='centrado'></td>
      <td><input type='text' name='Cla' size='10' class='centrado'></td>
      <td><input type='text' name=' Mod' size='10' class='centrado'></td>
	  <td><input type='text' name='Pai' size='10' class='centrado'></td>
      <td><input type='text' name='CP' size='10' class='centrado'></td>
	  <td><input type='text' name=' Ciu' size='10' class='centrado'></td>
	  <td><input type='text' name='Dir' size='30' class='centrado'></td>
      <td><input type='text' name='Tip' size='10' class='centrado'></td>
      <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td></tr>
      <tr><td></td><td colspan=3>Página <?php
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