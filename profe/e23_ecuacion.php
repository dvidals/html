<?php
	require "e23_matematicas.php";
	
	$res = ec2grado(1, 0, -1);
	if(!$res){
		echo "No tiene soluciones reales<br>";		
	}else{
		echo "x1: ". $res[0]. "<br>";
		echo "x2: ". $res[1]. "<br>";
	}
	$res = ec2grado(1, 0, 31);
	if(!$res){
		echo "No tiene soluciones reales<br>";		
	}else{
		echo "x1: ". $res[0]. "<br>";
		echo "x2: ". $res[1]. "<br>";
	}
	