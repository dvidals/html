<?php

if (isset($_POST["button"])){

		$n1=$_POST["num1"];
		$n2=$_POST["num2"];
		$operacion=$_POST["operacion"];
		calculo($operacion, $n1, $n2);
}

function calculo ($oper, $numero1, $numero2){
	
	if (!strcmp("Suma",$oper)){
		$resultado=$numero1+$numero2;
		echo "El resultado de la operación es $resultado";
	}
	
	
	if (!strcmp("Resta",$oper)){
		$resultado=$numero1-$numero2;
		echo "El resultado es $resultado";
	}
	
	if (!strcmp("Multiplicación",$oper)){
		$resultado=$numero1*$numero2;
		echo "El resultado es $resultado";
	}
	
	if (!strcmp("División",$oper)){
		$resultado=$numero1/$numero2;
		echo "El resultado es $resultado";
	}
	
	if (!strcmp("Módulo",$oper)){
		$resultado=$numero1%$numero2;
		echo "El resultado es $resultado";
	}
	
}		


?>