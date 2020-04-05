<?php

# Escribe un programa que ordene números enteros introducidos por teclado.
$a=array(1,2,3,4,69,125,14,33,48,12);
echo count($a)."<br>";
function ordenar ($a){
   for($j=0;$j<count($a);$j++){
    for ($i=0;$i<count($a);$i++){
        if ($a[$i]==max($a)){
            $contenedor[$j]=$a[$i];
            $a[$i]="";
            for($i=0;$i<count($a);$i++)echo $a[$i];
        }
        echo "<br>";
    }
         
    }
  foreach ($contenedor as $value) {
        echo $contenedor=$value."<br>";
        
    } 
}

echo ordenar($a);

?>
