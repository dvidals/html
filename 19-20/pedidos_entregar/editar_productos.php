<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="hoja.css">
</head>

<body>

<h1>ACTUALIZAR</h1>
<?php

include("conexion.php");
if (!isset($_POST["bot_actualizar"])){

$CodProd=$_GET['CodProd'];
$nom=$_GET['nom'];
$des=$_GET['des'];
$pes=$_GET['pes'];
$sto=$_GET['sto'];
$cod=$_GET['cod'];
} else{

$CodProd=$_POST['CodProd'];
$nom=$_POST['nom'];
$des=$_POST['des'];
$pes=$_POST['pes'];
$sto=$_POST['sto'];
$cod=$_POST['cod'];

  $sql="update productos set CodProd=:miCodProd, Nombre=:miNom, Descripcion=:miDes, Peso=:miPes, Stock=:miSto,CodCat=:miCod where CodProd=:miCodProd";
  $resultado=$bd->prepare($sql);
  $resultado->execute(array(":miCodProd"=>$CodProd, ":miNom"=>$nom, ":miDes"=>$des,":miPes"=>$pes, ":miSto"=>$sto, ":miCod"=>$cod));
  header ("Location:crud_productos.php");

}


?>

<p>
 
</p>
<p>&nbsp;</p>
<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
<!-- La información da actulización tiene que enviarse a la propia página en la que estamos-->
  <table width="25%" border="0" align="center">
    <tr>
      <td></td>
      <td><label for="CodProd"></label>
      <input type="hidden" name="CodProd" id="CodProd" value="<?php echo $CodProd?>"></td>
    </tr>
    <tr>
      <td>Nombre</td>
      <td><label for="nom"></label> 
      <input type="text" name="nom" id="nom" value="<?php echo $nom?>"></td>
    </tr>
    <tr>
      <td>Descripcion</td>
      <td><label for="des"></label>
      <input type="text" name="des" id="des" value="<?php echo $des?>"></td>
    </tr>
    <tr>
      <td>Peso</td>
      <td><label for="pes"></label>
      <input type="text" name="pes" id="pes" value="<?php echo $pes?>"></td>
    </tr>
	<tr>
      <td>Stock</td>
      <td><label for="sto"></label> 
      <input type="text" name="sto" id="sto" value="<?php echo $sto?>"></td>
    </tr>
	<tr>
      <td>CodCat</td>
      <td><label for="cod"></label> 
      <input type="text" name="cod" id="cod" value="<?php echo $cod?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>