<!DOCTYPE html>
<html>
	<head>
		<title>Solucionador de ecuaciones de 2º grado</title>		
		<meta charset = "UTF-8">
	</head>
	<body>			
		<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
			
			<input name = "a" type = "text">x2 + 							
			<input name = "b" type = "text">x +
			<input name = "c" type = "text"> = 0					
			<input type = "submit">
		</form>
		<hr>
		<section id = "sol">
			<?php 
			$err = FALSE;
			$msj = "";
			if ($_SERVER["REQUEST_METHOD"] == "POST") {  	
			// faltan comprobaciones
				if(!is_numeric($_POST["a"]) || !is_numeric($_POST["b"])
				|| !is_numeric($_POST["c"])){
					$err = TRUE;
					$msj = "Hay que introducir 3 números";					
				}elseif($_POST["a"]==="0"){
					$err = TRUE;
					$msj = "a no puede ser 0";					
				}
				else{
			//
					$a = $_POST['a'];
					$b = $_POST['b'];
					$c = $_POST['c'];
					$discriminante = $b * $b - 4 * $a *  $c;
					if($discriminante < 0){
						$msj = "No tiene soluciones reales<br>";
						$err = TRUE;
					}else{
						$x1 = round((-$b + sqrt($discriminante))/(2 * $a),2);
						$x2 = round((-$b - sqrt($discriminante))/(2 * $a),2);
					}
				}
				
	
				if($err){
					echo $msj;
				}else{
					echo "x1 = $x1 <br> x2 = $x2<br>";
				}
			}	
			?>
		</section>
	</body>
</html>
