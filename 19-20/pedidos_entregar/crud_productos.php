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
    if($_GET["pagina"]==1)header("Location:crud_productos.php");
    else $pagina=$_GET["pagina"];
    }else $pagina=1;
  
  
  $sql_total="select * from productos";

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


$registros=$bd->query("select * from productos limit $inicio,$limite")->fetchAll(PDO::FETCH_OBJ);

if(isset($_POST['cr'])){

  $nombre=$_POST['Nom'];
  $descripcion=$_POST['Des'];
  $peso=$_POST['Pes'];
  $stock=$_POST['Sto'];
  $codcat=$_POST['Cod'];
  

  $sql="insert into productos (Nombre, Descripcion, Peso, Stock, CodCat) values (:nom, :des, :pes, :sto, :cod)";
  $resultado=$bd->prepare($sql);
  $resultado->execute(array(":nom"=>$nombre,":des"=>$descripcion,":pes"=>$peso,":sto"=>$stock,":cod"=>$codcat));
  header("Location:crud_productos.php");


}


 



?>

<h1>Gestión de Productos</h1>


<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

  <table width="50%" border="0" align="center">
    <tr >
      <td class="primera_fila">CodProd</td>
      <td class="primera_fila">Nombre</td>
      <td class="primera_fila">Descripcion</td>
      <td class="primera_fila">Peso</td>
	  <td class="primera_fila">Stock</td>
      <td class="primera_fila">CodCat</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
    </tr> 
   

    <?php

    foreach ($registros as $persona):?>



  

    
		
   	<tr>
      <td><?php echo $persona->CodProd; ?> </td>
      <td><?php echo $persona->Nombre; ?> </td>
      <td><?php echo $persona->Descripcion; ?> </td>
      <td><?php echo $persona->Peso; ?> </td>
	  <td><?php echo $persona->Stock; ?> </td>
      <td><?php echo $persona->CodCat; ?> </td>
 
      <td class="bot"><a href="borrar_productos.php?CodProd=<?php echo $persona->CodProd?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
      <td class="bot"><a href="editar_productos.php?CodProd=<?php echo $persona->CodProd?> & nom=<?php echo $persona->Nombre?> & des=<?php echo $persona->Descripcion?> & pes=<?php echo $persona->Peso?>& sto=<?php echo $persona->Stock?>& cod=<?php echo $persona->CodCat?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>
    </tr>       

<?php

    endforeach;

?>


	<tr>
	<td></td>
      <td><input type='text' name='Nom' size='20' class='centrado'></td>
      <td><input type='text' name='Des' size='30' class='centrado'></td>
      <td><input type='text' name=' Pes' size='10' class='centrado'></td>
	  <td><input type='text' name='Sto' size='10' class='centrado'></td>
      <td><input type='text' name='Cod' size='10' class='centrado'></td>
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