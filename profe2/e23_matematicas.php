<?php 
	function ec2grado($a, $b, $c){
		$discriminante = $b * $b - 4 * $a *  $c;
		if($discriminante < 0){
			return FALSE;
		}else{
			$x1 = (-$b + sqrt($discriminante))/(2 * $a);
			$x2 = (-$b - sqrt($discriminante))/(2 * $a);			
			$res = array($x1, $x2);
			return $res;
		}		
	}	

	
	