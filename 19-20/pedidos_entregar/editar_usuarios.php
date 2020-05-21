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
require 'sesiones.php';
require_once 'bd.php';
comprobar_sesion();

$res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
	$bd = new PDO($res[0], $res[1], $res[2]);
	if (!isset($_POST["bot_actualizar"])){

$CodRes=$_GET['CodRes'];
$Correo=$_GET['cor'];
$Clave=$_GET['cla'];
$Modificada=$_GET['mod'];
$Pais=$_GET['pai'];
$CP=$_GET['cp'];
$Ciudad=$_GET['ciu'];
$Direccion=$_GET['dir'];
$Tipo=$_GET['tip'];

} else{

$CodRes=$_POST['CodRes'];
$Correo=$_POST['Correo'];
$Clave=$_POST['Clave'];
$Modificada=$_POST['Modificada'];
$Pais=$_POST['Pais'];
$CP=$_POST['CP'];
$Ciudad=$_POST['Ciudad'];
$Direccion=$_POST['Direccion'];
$Tipo=$_POST['Tipo'];

  $sql="update usuarios set Correo=:miCor, Clave=:miCla, Modificada=:miMod, Pais=:miPai, CP=:miCP, Ciudad=:miCiu, Direccion=:miDir, Tipo=:miTip where CodRes=:miCod";
  $resultado=$bd->prepare($sql);
  $resultado->execute(array(":miCod"=>$CodRes, ":miCor"=>$Correo, ":miCla"=>$Clave, ":miMod"=>$Modificada, ":miPai"=>$Pais, ":miCP"=>$CP, ":miCiu"=>$Ciudad, ":miDir"=>$Direccion, ":miTip"=>$Tipo));
  header ("Location:crud_usuarios.php");

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
      <td><label for="CodRes"></label>
      <input type="hidden" name="CodRes" id="CodRes" value="<?php echo $CodRes?>"></td>
    </tr>
    <tr>
      <td>Correo</td>
      <td><label for="Correo"></label> 
      <input type="text" name="Correo" id="Correo" value="<?php echo $Correo?>"></td>
    </tr>
    <tr>
      <td>Clave</td>
      <td><label for="Clave"></label>
      <input type="text" name="Clave" id="Clave" value="<?php echo $Clave?>"></td>
    </tr>
    <tr>
      <td>Modificada</td>
      <td><label for="Modificada"></label>
      <input type="text" name="Modificada" id="Modificada" value="<?php echo $Modificada?>"></td>
    </tr>
	<tr>
      <td>Pais</td>
      <td><label for="Pais"></label> 
      <input type="text" name="Pais" id="Pais" value="<?php echo $Pais?>"></td>
    </tr>
	<tr>
      <td>CP</td>
      <td><label for="CP"></label> 
      <input type="text" name="CP" id="CP" value="<?php echo $CP?>"></td>
    </tr>
	<tr>
      <td>Ciudad</td>
      <td><label for="Ciudad"></label> 
      <input type="text" name="Ciudad" id="Ciudad" value="<?php echo $Ciudad?>"></td>
    </tr>
	<tr>
      <td>Direccion</td>
      <td><label for="Direccion"></label> 
      <input type="text" name="Direccion" id="Direccion" value="<?php echo $Direccion?>"></td>
    </tr>
	<tr>
      <td>Tipo</td>
      <td><label for="Tipo"></label> 
      <input type="text" name="Tipo" id="Tipo" value="<?php echo $Tipo?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>