<?php
 header('Content-Type: text/html; charset=utf-8');
    $pais = 'Japón';  // sin problemas con el acento
    $ciudad = 'Tokio';
	$valoracion= 4;
	$salario=12000;
	$hoy = 'Martes';
	$dias_semana=array ('Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo');
	$fin_semana=array(5=>"Sábado",6=>'Domingo');
	$nombre="Juanes";
	$cuenta=1;
	$cuenta1=8;
	$p = 10;
	$q = 11;
	$r = 11.3;
	$s = 11;
	$x=15;
	$bool = (boolean) 1;	// mismo valor pero
	$int = (integer) 1;	// distinto tipo  (tb vale cast (int))
	$fila;
	$col;
	$str = 'Hola de nuevo';
	$str1 = '';  // ojo, comillas simples
	$str3 = null; 
	$str2 = '0'; 
	$str4='Patricia';
	
   
    echo ('La capital de ' . $pais. ' es'."\n" . $ciudad. '</br>');
	echo "un \$ equivale a 80 céntimos de euro";
	echo '</br>';
if ($valoracion >= 3) {
    if ($salario < 15000) {
        $salario= $salario+5000;  // incremento de salario: 5000
    } 
	else  { 
			$valoracion=2;
			$salario=15000;
	}
} else {     	// resto de empleados
    if ($salario < 15000) {     
        $salario += 3000;       // incremento de 3000
    }        
}
echo "\$salario= ".$salario.", \$valoracion= ".$valoracion;
echo "</br>";
switch ($hoy ) {
    case 'Lunes':;
    case  'Martes':;
    case  'Miércoles':;
    case 'Jueves': echo "hola\n";
    case 'Viernes':echo "amigo!<br>";
    echo 'Hoy es jornada laboral';
        break;
    case  'Sábado':;
    case 'Domingo':;
    echo 'Hoy es fin de semana';
        break;
 default;
    echo 'Día no reconocido';
}
echo'<br>';
$ipc=1.2;
$salario*=$ipc;
$salario+=1000;
$salario/=2;
echo "\$salario=".$salario.'<br>';
echo gettype($salario).'<br>';
print_r($dias_semana);
echo '<br>';
echo "<br>".print_r($dias_semana);
echo "<br>".$dias_semana[1]."<br>";
echo $fin_semana[5]."<br>".$fin_semana[6]."<br>";
echo "Información de la variable \"nombre\":  ";
var_dump($nombre);
define("euro",166.386);
echo "<br>1000pts. son ". intval((1000/euro)*100)/100 ."€<BR>";
while ($cuenta<20){
    echo "$cuenta".';';
       $cuenta++;
}
echo "<br>";
 do{
   echo 'x';
   $cuenta1++;
  } while ($cuenta1  < 10);
  echo "<br>".$cuenta1;

  echo "<br>";
  for ($n=1; $n<=12;$n++){
            echo "<hr>";
for ($x=1; $x<=10; $x++) {  
    echo "$n x $x =". $n*$x."<br>";
}
}
while ($cuenta <= 24) {
    $cuenta++;
    if ($cuenta == 23) {                          // cuando cuenta alcanza 23, sale del bucle
        break;                                         // break debe evitarse en bucles 
    }
    echo "Esta es la iteración número $cuenta <br/>";
}
echo ($q > $p)."<br>";  // cierto: muestra 1
echo ($q < $p)."<br>";  // falso: muestra cadena vacía
echo ($q >= $s)."<br>";  // cierto: muestra 1
echo ($r <= $s)."<br>";   // falso: muestra cadena vacía
echo ($q == $s)."<br>";  // cierto: muestra 1
echo ($q == $r)."<br>";   // falso: muestra cadena vacía
echo ($q = $r)."<br>";   // muestra el valor asignado: 11.3
echo ($a == 0)."<br>";  // muestra 1 ($a no está definida)
echo ($a === 0);  // error ($a no está definida)
echo ($bool == $int)."<br>";  // devuelve 1
echo ($bool === $int)."<br>";  // devuelve cadena vacía
echo (int)($bool === $int)."<br>";  // devuelve 0; sin cast, nada
echo ($x < 10) ? 'X menor que 10' : 'X mayor que 10';
echo "<br>";
echo "<table width=\"700\" border=\"3\">";
 for ($fila=1;$fila<=5;$fila++){
     echo "<tr>";

   for ($col=1;$col<=6;$col++)  {
       echo "<td>";
       echo "fila$fila columna$col";
       echo "</td>";
      
   }
   
    echo "</tr>"; 
 }
 echo "</table>";
 echo "<br>";
 echo substr($str, 8, 3).'<br>'; //Comienza en la posición 8 (n) con longitud 3
echo substr($str, -5, -1).'<br>'; //salida: nuev 
echo substr($str, -5, 3).'<br>'; //salida: nue
echo substr($str, 5, -3).'<br>';//salida: de nu
echo  empty($str1)."<br>"; // salida: 1
echo  empty($str3)."<br>";  // salida: 1   
echo  empty($str2)."<br>"; // salida: 1 (una cadena con 0)
unset($str2);
echo empty($str2)."<br>";  // salida: 1
echo empty ($str4)."<br>"; 
echo empty($str1)."<br>";

?>