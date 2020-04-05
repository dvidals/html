<?php
/*funcion factorial*/
function factorial($num){
	if($num < 0) return -1;	
	$resul = 1;
	for($i=2; $i <= $num; $i++){
		$resul = $resul * $i;
	}
	return $resul;
}
$var = 4;
$r = factorial($var);
echo $r;
