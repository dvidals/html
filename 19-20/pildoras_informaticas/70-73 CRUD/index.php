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
//$conexion=$base->query("select * from datos_usuarios");
//almacenarlo en un array de objetos (esa consulta):

//$registros=$conexion->fetchAll(PDO::FETCH_OBJ); //dentro de registros ya tendríamos un array de objetos.

//Las dos líneas de código anteriores se pueden hacer en un único paso, el siguiente:

//-------------------PAGINACIÓN-----------------------

//$contador=0;
  $limite=3;

    if (isset($_GET["pagina"])){
    if($_GET["pagina"]==1)header("Location:index.php");
    else $pagina=$_GET["pagina"];
    }else $pagina=1;
  
  
  $sql_total="select * from datos_usuarios";

  $resultado=$base->prepare($sql_total);
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


$registros=$base->query("select * from datos_usuarios limit $inicio,$limite")->fetchAll(PDO::FETCH_OBJ);

if(isset($_POST['cr'])){

  $nombre=$_POST['Nom'];
  $apellido=$_POST['Ape'];
  $direccion=$_POST['Dir'];

  $sql="insert into datos_usuarios (Nombre, Apellido, Direccion) values (:nom, :ape, :dir)";
  $resultado=$base->prepare($sql);
  $resultado->execute(array(":nom"=>$nombre,":ape"=>$apellido,":dir"=>$direccion));
  header("Location:index.php");


}


 



?>

<h1>CRUD<span class="subtitulo">Create Read Update Delete</span></h1>


<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

  <table width="50%" border="0" align="center">
    <tr >
      <td class="primera_fila">Id</td>
      <td class="primera_fila">Nombre</td>
      <td class="primera_fila">Apellido</td>
      <td class="primera_fila">Dirección</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
    </tr> 
   

    <?php

    foreach ($registros as $persona):?>



  

    
		
   	<tr>
      <td><?php echo $persona->Id; ?> </td>
      <td><?php echo $persona->Nombre; ?> </td>
      <td><?php echo $persona->Apellido; ?> </td>
      <td><?php echo $persona->Direccion; ?> </td>
 
      <td class="bot"><a href="borrar.php?Id=<?php echo $persona->Id?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
      <td class='bot'><a href="editar.php?Id=<?php echo $persona->Id?> & nom=<?php echo $persona->Nombre?> & ape=<?php echo $persona->Apellido?> & dir=<?php echo $persona->Direccion?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>
    </tr>       

<?php

    endforeach;

?>


	<tr>
	<td></td>
      <td><input type='text' name='Nom' size='10' class='centrado'></td>
      <td><input type='text' name='Ape' size='10' class='centrado'></td>
      <td><input type='text' name=' Dir' size='10' class='centrado'></td>
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