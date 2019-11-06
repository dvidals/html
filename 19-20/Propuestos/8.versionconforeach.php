<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
# Escribe un programa que ordene números enteros introducidos por teclado.
$a=array(1,2,3,4,69,125,14,33,48,12);


function ordenar ($a){
    $b=$a;
   
for ($i=0; $i<count($b);$i++){    //se pone $b  en el count en vez de $a porque $a va decreciendo en el número de elementos debido al unset, no recorreríamos todas las veces necesarias el array.
$contenedor[$i]=max($a);
foreach($a as $k=>$valor){
    
    if($valor==max($a)){ 
    //for($j=0;$j<count($a);$j++) echo $a[$j]; 
    echo "Valor eliminado en esta iteración ".($i+1).": ". $a[$k];
    unset($a[$k]);
    echo ". Elementos del $a después de la ".($i+1)." iteración: ".count($a).". Los siguientes: ";
    for($j=0;$j<count($b);$j++) echo $a[$j]."-";  // Nota importante: no se puede usar $i hay que usa $j si no se pararía en la primera ejecución. 
    //break; //si hacemos un break va todo perfecto, sino vuelve a evaluarse la condición del if siempre que después del máximo al que se le va hacer el unset el siguiente máximo esté
    //siguiente  máximo esté a continuación de él. 
    }
}
   echo "<br>";
  print_r($a);  
   echo "<br>";
}
            
    echo "<br>";
    echo "El array contenedor de los números ordenados de menor a mayor tiene un total de ".count($contenedor)." elementos<br>";  // Comprobamos que contenedero tiene 10 valores, pero sólo muestra 7 
  
    echo "<br>";
    var_dump($contenedor);
}
echo ordenar($a);
?>
