<html>

<head>
	<title>Hola Mundo en PHP</title>
</head>

<body>
	<p>
		<?php

		//////////////////////////////////////////////////////////////////
		// Tipos y variables

		$numero = 3;
		echo $numero; //Muestra 3
		echo "<BR/>El número es $numero"; //Muestra "El número es 3"
		echo "<BR/>";
		var_dump(numero); // Al no poner "$", toma "numero" como un literal, esto es, como un string
		var_dump("numero"); // Forma correcta de usar un string, entre comillas
		echo "<BR>";
		echo gettype(numero);
		echo "<BR>";
		var_dump($numero); //Muestra int(3)
		echo "<BR>";
		echo gettype($numero); //Muestra integer

		// Uso de las comillas

		$lenguaje = "PHP";
		echo "<B>1 Estamos \"trabajando\" con $lenguaje </B><BR><BR>"; // Para escribir comillas literalmente
		echo '<B>2 Estamos "trabajando" con $lenguaje </B><BR><BR>'; // Dentro de las comillas simples no se sustituyen las variables
		echo '<B>2 Estamos "trabajando" con ' . $lenguaje . '</B><BR><BR>'; // Dentro de las comillas simples no se sustituyen las variables
		echo "<B>3 Estamos 'trabajando'' con $lenguaje </B><BR><BR>";
		echo "La variable \$lenguaje contiene: $lenguaje <BR>"; // Para escribir $ literalmente

		//////////////////////////////////////////////////////////////////
		// Definición de constante

		define("PI", 3.14159265); //sin $, en mayúsculas
		// La constante PI tendrá un valor de 3.14159265
		$radio = 25;
		$area = PI * $radio * $radio;
		echo "El área es $area";

		//////////////////////////////////////////////////////////////////
		//Operadores
		$numero = 25;
		$nombre = "Pepe";
		$suma = 3 + 6;

		$cadena = "Hola" . " Pepito";
		$cadena1 = "Buenos";
		$cadena2 = "días";
		$cadena3 = $cadena1 . " " . $cadena2;

		$suma = 3 + 5; //Resultado 8
		$resta = $suma - 4; //Resultado 4
		$producto = 4 * 5; //Resultado 20
		$cociente = $producto / $resta; //Resultado 5
		$resto = 21 % 5; //Resultado 1

		//https://www.php.net/manual/es/language.operators.php

		//////////////////////////////////////////////////////////////////
		// Operadores de incremento y decremento
		$numero = 3;
		$numero++; //Pasa a valer 4
		$otroNumero = 7;
		$otroNumero--; //Pasa a valer 6
		$a = 3;
		$b = 5;
		$c = $a++ + $b; //$c vale 8 y $a vale 4

		// https://www.php.net/manual/es/language.operators.increment.php

		//////////////////////////////////////////////////////////////////
		// Operadores booleanos
		$a = true;
		$b = !$a; //$b es false
		$c = false;
		$d = $a && $c; //$d es false
		$e = $a || $c; //$e es true
		$f = $a xor $c; //$d es true

		//////////////////////////////////////////////////////////////////
		// Operadores
		$a = 1;
		$a += 4; //$a vale ahora 5
		//Equivalente a $a = $a + 4;
		$a -= 3; //$a vale ahora 2
		//Equivalente a $a = $a - 3;
		$a *= 2; //$a vale ahora 4
		//Equivalente a $a = $a * 2;
		$texto = "Hola";
		$texto .= " Pepito"; //$texto vale ahora "Hola Pepito"
		//Equivalente a $texto = $texto . " Pepito";

		?>

	</p>
</body>

</html>
