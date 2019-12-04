<?php
error_reporting(E_ALL ^ E_NOTICE); 
$matriz=explode(",",$_POST['matriz']);
$n=$matriz[0];
$m=$matriz[1];


function dni(){
$dni=array();
for ($l=0;$l<7;$l++){
    $dni[$i]=rand(0,9);
}
print_r($dni);// No sale lo que esperaba un único arrray de 8 elementos
$dni=implode("",$dni);
$dni=intval($dni);

//echo ($dni); No sale lo que esperaba

$completo[0]=$dni;
$completo[1]=substr("TRWAGMYFPDXBNJZSQVHLCKE", $numbers % 23, 1);

$dni=implode("",$completo);
$dni=intval($dni);
return $dni;
}
echo dni();


function CrearMatriz(int $n, int $m){
    $a=array();
    
for ($i=0;$i<$n;$i++){
    for ($j=0;$j<$m;$j++){
        $a[$i][$j]= dni();
        
        }
        
        
    }
    return $a;
}



//define ("n",8);
//define ("m",8);
 $a=CrearMatriz($n,$m);

 echo "<table>";
 foreach ($a as $v){
      echo"<tr>";
     foreach ($v as $v2){
         echo"<td>";
         echo "$v2";
         echo"</td>";
     }
     echo"</tr>";
 }
 echo "</table>";

 //Se deja el ejercicio porque está saliendo un churro.