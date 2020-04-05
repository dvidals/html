<?php

////repetir hasta que el contador alcanza 20
$salir=1;
$cuenta=1;
while ($cuenta<20 and $salir==1){
    echo "$cuenta".';';
   // if ($cuenta==10) $salir=0;  
   $cuenta++;
}
echo "<br>";
?>

<?php

$cuenta=8;
  do{
   echo 'x';
   $cuenta++;
  } while ($cuenta  < 10);
  echo "<br>".$cuenta;

  echo "<br>";

?>

<?php
// for sigue el esquema variable con su valor; condición; modificación de la variable

for ($n=1; $n<=12;$n++){
            echo "<hr>";
for ($x=1; $x<=10; $x++) {  
    echo "$n x $x =". $n*$x."<br>";
}
   

}

?>
<?php
// for sigue el esquema variable con su valor; condición; modificación de la variable

for ($n=1; $n<=12;$n=$n+1.7){
            echo "<hr>";
            echo "¡La tabla del $n!.<br>";
for ($x=1; $x<=10; $x++) {  
    echo "$n x $x =". $n*$x."<br>";
}
   

}

?>