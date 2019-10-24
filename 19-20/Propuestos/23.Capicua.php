<?php
/*Escribir un algoritmo que…
a) solicite un número y nos diga si es capicúa. Para ello programa la función esCapicua.
b) solicite un número N y nos visualice la suma de todos los números capicúa menores que N
*/
$numero=$_POST['numero1'];
function esCapicua($numero){
    $numero=str_split($numero);
    $b=true;

    for ($i=0;$i<count($numero);$i++){
        if($numero[$i]==$numero[count($numero)-$i-1]);
        else $b=false;
        
    }
return $b;

}

var_dump(esCapicua($numero));
echo"<br>";



$numero2=$_POST['numero2'];;
$n=0;

for($i=0;$i<$numero2;$i++){
    if(esCapicua($i)==true){
     $n=$n+$i;
    }
    
}
echo $n."<br>";

?>