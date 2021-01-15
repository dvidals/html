<html>
<head>
	<title>Hola Mundo en PHP</title>
</head>
<body>
	<p>
		<?php 


		echo "hola<br/>"; 
		$nombre="Juan";
		function dameNombre($parametro){
			return $parametro=" El nombre es ".$parametro;
			
		}

		 echo dameNombre($nombre);
		 echo "<br/>";
		$contador = 0;
		

		function incrementa(){
			global $contador;
			$contador++;
		}
		
		incrementa();
		incrementa();
		echo $contador."<br/>";

		function DosEnDos(){
			static $duplicador=0;
			$duplicador=$duplicador+2;
			echo $duplicador."<br>";
		}
		
		DosEnDos();
		DosEnDos();
		DosEnDos();

		phpinfo();


		# Comentario de linea
		// Comentario de linea

		/* Comentario con cierre
		(varias lineas) */


		
		?>

</p>
</body>
</html>



