<?php

# Escribe un programa que ordene números enteros introducidos por teclado.
$a=array(1,2,3,4,69,125,14,33,48,12);
//echo count($a)."<br>";
function ordenar ($a){

   for($j=0;$j<count($a);$j++){
    for ($i=0;$i<count($a);$i++){
        if ($a[$i]==max($a)){
            $contenedor[$j]=$a[$i];
            $a[$i]="";
            //for($i=0;$i<count($a);$i++) echo $a[$i]; //No nos muestra el 69, con esta línea comprobamos que el 69 existe
        }
        
        //echo "<br>";
    }
   
    }
    echo "El array contenedor de los números ordenados de menor a mayor tiene un total de ".count($contenedor)." elementos<br>";  // Comprobamos que contenedero tiene 10 valores, pero sólo muestra 7 
  /*foreach ($contenedor as $value) {
        echo $contenedor=$value."<br>";
        
        
    } */
    for ($k=0;$k<count($contenedor);$k++) echo $contenedor[$k]."<br>";
    
}

echo ordenar($a);

?>
