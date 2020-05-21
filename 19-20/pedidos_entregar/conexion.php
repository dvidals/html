
	<?php
	
	try{

		$bd=new PDO ('mysql:host=localhost;dbname=pedidos_entregar','root','');//creamos la conexión, 3 argumentos separados por comas.
	
		$bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$bd->exec("SET CHARACTER SET UTF8");
		//echo "Conexión OK";

	}catch(Exception $e){

		die('Error: '.$e->GetMessage());
		echo "Línea del error: ".$e->getLine();	
		
		

	}
	/*finally{
		$base=null; //vaciar la memoria
	}

 */

 //Es importante en este caso desmarcar el finally, no daría un error si lo dejásemos.

	?>

