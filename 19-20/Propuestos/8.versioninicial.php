<?php

# Escribe un programa que ordene números enteros introducidos por teclado.
$a=array(1,2,3,4,69,125,14,33,48,12);
function ordenar ($a){
   for($j=0;$j<count($a);$j++){
    for ($i=0;$i<count($a);$i++){
        if ($a[$i]==max($a)){
            $contenedor[$j]=$a[$i];
            $a[$i]="";
          for($i=0;$i<count($a);$i++)echo $a[$i]; //lleva ímplicito un break en la práctica, por eso funcionaba cuando no teníamos el break.
          // Al hacer ese bucle for con el mismo índice $i que el for que lo contiene conseguimos llevarlo hasta el final del array por eso no elimina los máximos
          // que estén después del máximo que se eliminó.
            break; // si le ponemos un break funciona, si no se lo ponemos el if se ejecuta dos veces en vez de una en alguna de las iteraciones
        }
        
    }
     echo "<br>";  
     //echo $contenedor[$j]."<br>";
    }
  echo count($contenedor)."<br>";
  foreach ($contenedor as $value) {
       echo $contenedor=$value."<br>";
        
    } 
}

echo ordenar($a);

?>
