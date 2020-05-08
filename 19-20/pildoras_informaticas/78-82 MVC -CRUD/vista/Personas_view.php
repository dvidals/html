<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CRUD MVC</title>
<style>
    td{
        border:1px dotted #FF0000;
    }

</style>
</head>

<body>

<?php require("modelo/paginacion.php");?>


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

    //donde antes tenímos $registros ahora tenemos que poner $matrizPersonas porque es el array donde se guardan los registros de personas de la tabla datos_usuarios

    foreach (/*$registros*/ $matrizPersonas as $persona):?> 



  

    
		
   	<tr>

       
      <td><?php echo /*$persona->Id*/$persona['Id']; //antes trabajaba como objeto $persona y accedía a su Id, pero realmente lo que tengo ahora es un array?> </td>
      <td><?php echo /*$persona->Nombre*/$persona['Nombre']; ?> </td>
      <td><?php echo /*$persona->Apellido*/$persona['Apellido']; ?> </td>
      <td><?php echo /*$persona->Direccion*/$persona['Direccion']; ?> </td>
 
      <td class="bot"><a href="modelo/borrar.php?Id=<?php echo /*$persona->Id*/$persona['Id']?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
      <td class="bot"><a href="modelo/editar.php?Id=<?php echo /*$persona->Id*/$persona['Id']?>&nom=<?php echo /*$persona->Nombre*/$persona['Nombre']?>&ape=<?php echo /*$persona->Apellido*/$persona['Apellido']?>&dir=<?php echo /*$persona->Direccion*/$persona['Direccion']?>">
      <input type='button' name='up' id='up' value='Actualizar'></a></td>
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

</body>
</html>