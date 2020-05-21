<?php
function leer_config($nombre, $esquema){
	$config = new DOMDocument();
	$config->load($nombre);
	$res = $config->schemaValidate($esquema);
	if ($res===FALSE){ 
	   throw new InvalidArgumentException("Revise fichero de configuración");
	} 		
	$datos = simplexml_load_file($nombre);	
	$ip = $datos->xpath("//ip");
	$nombre = $datos->xpath("//nombre");
	$usu = $datos->xpath("//usuario");
	$clave = $datos->xpath("//clave");	
	$cad = sprintf("mysql:dbname=%s;host=%s", $nombre[0], $ip[0]);
	$resul = [];
	$resul[] = $cad;
	$resul[] = $usu[0];
	$resul[] = $clave[0];
	return $resul;
}

function borrar($CodRes){
	$res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
	$bd = new PDO($res[0], $res[1], $res[2]);
	$ins = "delete from usuarios where CodRes='$CodRes'";
	$resul = $bd->query($ins);	
	
}

function cambiar_clave($codRes, $Clave){
	$res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
	$bd = new PDO($res[0], $res[1], $res[2]);
	$sql = "update usuarios set Clave=$Clave, Modificada=1 where CodRes=$codRes";	
	$resul = $bd->query($sql);	
	
}
/*
function actualizar_usuarios(){
	$res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
	$bd = new PDO($res[0], $res[1], $res[2]);
	if (!isset($_POST["bot_actualizar"])){

$CodRes=$_GET['CodRes'];
$Correo=$_GET['Correo'];
$Clave=$_GET['Clave'];
$Modificada=$_GET['Modificada'];
$Pais=$_GET['Pais'];
$CP=$_GET['CP'];
$Ciudad=$_GET['Ciudad'];
$Direccion=$_GET['Direccion'];
$Tipo=$_GET['Tipo'];

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

  $sql="update datos_usuarios set Correo=:miCor, Clave=:miCla, Modificada=:miMod, Pais=:miPai, CP=:miCP, Ciudad=:miCiu, Direccion=:miDir, Tipo=:miTip where CodRes=:miCod";
  $resultado=$base->prepare($sql);
  $resultado->execute(array(":miCod"=>$CodRes, ":miCor"=>$Correo, ":miCla"=>$Clave, ":miMod"=>$Modificada, ":miPai"=>$Pais, ":miCP"=>$CP, ":miCiu"=>$Ciudad, ":miDir"=>$Direccion, ":miTip"=>$Tipo));
  header ("Location:index.php");

}
	
}
*/
function insertar_usuarios($Correo,$Clave,$Modificada,$Pais,$CP,$Ciudad,$Direccion,$Tipo){
	
	$res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
	$bd = new PDO($res[0], $res[1], $res[2]);


  $sql="insert into usuarios (Correo,Clave,Modificada,Pais,CP,Ciudad,Direccion,Tipo) values (:cor, :cla, :mod, :pai, :cp, :ciu, :dir, :tip)";
  $resultado=$bd->prepare($sql);
  $resultado->execute(array(":cor"=>$Correo,":cla"=>$Clave, ":mod"=>$Modificada, ":pai"=>$Pais, ":cp"=>$CP, ":ciu"=>$Ciudad, ":dir"=>$Direccion, ":tip"=>$Tipo));
  	

}


function registros(){
	$res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
	$bd = new PDO($res[0], $res[1], $res[2]);
	$registros=$bd->query("select * from usuarios")->fetchAll(PDO::FETCH_OBJ);
	return $registros;
	
}


function comprobar_usuario($nombre, $clave){
	$res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
	$bd = new PDO($res[0], $res[1], $res[2]);
	$ins = "select codRes, correo, clave, modificada, tipo from usuarios where correo = '$nombre' 
			and clave = '$clave'";
	$resul = $bd->query($ins);	
	if($resul->rowCount() === 1){		
		return $resul->fetch();		
	}else{
		return FALSE;
	}
}

function cargar_categorias(){
	$res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
	$bd = new PDO($res[0], $res[1], $res[2]);
	$ins = "select codCat, nombre from categoria order by codCat";
	$resul = $bd->query($ins);	
	if (!$resul) {
		return FALSE;
	}
	if ($resul->rowCount() === 0) {    
		return FALSE;
    }
	//si hay 1 o más
	return $resul;	
}

function cargar_categoria($codCat){
	$res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
	$bd = new PDO($res[0], $res[1], $res[2]);
	$ins = "select nombre, descripcion from categoria where codcat = $codCat";
	$resul = $bd->query($ins);	
	if (!$resul) {
		return FALSE;
	}
	if ($resul->rowCount() === 0) {    
		return FALSE;
    }	
	//si hay 1 o más
	return $resul->fetch();	
}
function cargar_productos_categoria($codCat){
	$res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
	$bd = new PDO($res[0], $res[1], $res[2]);	
	$sql = "select * from productos where codcat  = $codCat";	
	$resul = $bd->query($sql);	
	if (!$resul) {
		return FALSE;
	}
	if ($resul->rowCount() === 0) {    
		return FALSE;
    }	
	//si hay 1 o más
	return $resul;			
}
// recibe un array de códigos de productos
// devuelve un cursor con los datos de esos productos
function cargar_productos($codigosProductos){
	$res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
	$bd = new PDO($res[0], $res[1], $res[2]);
	$texto_in = implode(",", $codigosProductos);
	$ins = "select * from productos where codProd in($texto_in)";
	$resul = $bd->query($ins);	
	if (!$resul) {
		return FALSE;
	}
	return $resul;	
}
function insertar_pedido($carrito, $codRes){
	$res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
	$bd = new PDO($res[0], $res[1], $res[2]);
	$bd->beginTransaction();	
	$hora = date("Y-m-d H:i:s", time());
	// insertar el pedido
	$sql = "insert into pedidos(fecha, enviado, restaurante) 
			values('$hora',0, $codRes)";
	$resul = $bd->query($sql);	
	if (!$resul) {
		$bandera1=FALSE;
		echo "La bandera 1 es falsa".$bandera2."<br>";
		return $bandera1;
	}
	
	
	// coger el id del nuevo pedido para las filas detalle
	$pedido = $bd->lastInsertId();
	// insertar las filas en pedidoproductos y restar Stock
	// insertar las filas en pedidoproductos:
	foreach($carrito as $codProd=>$unidades){
		$sql = "insert into pedidosproductos(CodPed, CodProd, Unidades) 
		             values( $pedido, $codProd, $unidades)";			
		 $resul = $bd->query($sql);	
		if (!$resul) {
			$bd->rollback();
			$bandera2=FALSE;
			echo "La bandera 2 es falsa".$bandera2."<br>";
			return $bandera2;
		}
	}
	
	
	//restar Stock en productos:
	
	foreach($carrito as $codProd=>$unidades){
		$sql="select * from productos where CodProd=$codProd";
		$resultado = $bd->query($sql);
		//var_dump($resultado);
		while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
			$stock=$registro['Stock'];
		}
		
		$nuevo_stock=$stock-$unidades;
		echo $nuevo_stock."</br>";
		$sql = "update productos set Stock=$nuevo_stock where CodProd=$codProd";			
		 $resul = $bd->query($sql);	
		 //var_dump($resul);
		if (!$resul) {
			$bd->rollback();
			$bandera3=FALSE;
			echo "La bandera 3 es falsa".$bandera3."<br>";
			return $bandera3;
		}
	}
	
	//commit:
	$bd->commit();
	return $pedido;
}

