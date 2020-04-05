<?php
	/* funcion factorial */
	function factorialEx($num){
		if ($num < 0) {
			throw new InvalidArgumentException("Número negativo");
		}	
		$resul = 1;
 		for($i=2; $i <= $num; $i++){
			$resul = $resul * $i;
		}
		return $resul;
	}
	echo factorialEx(3);
    echo "<br>";
    try {
    echo factorialEx(-3);
} catch (Exception $e) {
    echo "Excepción: " . $e->getMessage() . "<br>";
}
	