<style>

.resultado{
		font-size:38px;
		color:#F00;
		font-weight:bold;
	}
</style>
<?php

if (isset($_POST["button"])){

		$n1=$_POST["num1"];
		$n2=$_POST["num2"];
		$operacion=$_POST["operacion"];
		calculo($operacion, $n1, $n2);
}

function calculo ($oper, $numero1, $numero2=1){
	
	if (!strcmp("Suma",$oper)){
		$resultado=$numero1+$numero2;
		echo "<p class='resultado'>El resultado de la operación es $resultado</p>";
	}
	
	
	if (!strcmp("Resta",$oper)){
		$resultado=$numero1-$numero2;
		echo "<p class='resultado'>El resultado de la operación es $resultado</p>";
	}
	
	if (!strcmp("Multiplicación",$oper)){
		$resultado=$numero1*$numero2;
		echo "<p class='resultado'>El resultado es de la operación es $resultado</p>";
	}
	
	if (!strcmp("División",$oper)){
		$resultado=$numero1/$numero2;
		echo "<p class='resultado'>El resultado es de la operación es $resultado</p>";
	}
	
	if (!strcmp("Módulo",$oper)){
		$resultado=$numero1%$numero2;
		echo "<p class='resultado'>El resultado de la operación es $resultado</p>";
	}

	if (!strcmp("Incremento",$oper)){
		$resultado=$numero1++;
		echo "<p class='resultado'>El resultado de la operación es $resultado</p>";
	}

	if (!strcmp("Decremento",$oper)){
		$resultado=$numero1--;
		echo "<p class='resultado'>El resultado de la operación es $resultado</p>";
	}
	
}		


?>