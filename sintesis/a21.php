<?php
	$num = 3;
	$resul = 1;
	if($num < 0) {
		echo "No se puede calcular el factorial de un número negativo";
		return;
	}
	for($i = 2; $i <= $num; $i++){
		$resul = $resul * $i;
	}
	echo "El factorial de $num es $resul";