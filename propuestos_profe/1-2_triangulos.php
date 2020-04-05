<!-- 1. Pirámide de asteriscos. La base de la pirámide debe estar formada por 9 asteriscos. -->

<div style='text-align:center; width:100px; background:#cccccc'>
<?php
define("SIZE_BASE", 9);

echo "";
for ($i = 0; $i < SIZE_BASE; $i++) {
	for ($j = 0; $j < $i; $j++) {
		echo ("*");
	}
	echo ("<br/>");
}
?>
</div><br/><br/><br/>

<!-- Dependerá del cliente: hacerlo espeficando espacios solo funcionará en funcion de la fuente -->
<div style='font-family: Times New Roman'> <!-- Probar con monospace -->
<?php

$espacios = SIZE_BASE;
for ($i = 1; $i <= SIZE_BASE; $i++) {
	for ($j = 1; $j <= $espacios; $j++) echo '&nbsp;';
	for ($j = 0; $j < $i; $j++)	echo "*";
	echo "<br/>";
	$espacios--;
}

?>
</div><br /><br />


<!-- 2. Pirámide invertida, con el vértice hacia abajo. -->

<br />
<div style='font-family: monospace'>  <!-- Usando monospace pero solo con impares -->
	<?php
	for ($i = 0; $i < SIZE_BASE; $i += 2) {
		for ($j = 0; $j < $i / 2; $j++) echo "&nbsp;";
		for ($j = 0; $j < SIZE_BASE - $i; $j++) echo "*";
		echo "<br/>";
	}
	?>
</div>

?>