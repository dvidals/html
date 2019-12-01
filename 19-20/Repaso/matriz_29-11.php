<?php
error_reporting(E_ALL ^ E_NOTICE); 
function CrearMatriz(int $n, int $m){
    $a=array();
for ($i=0;$i<$n;$i++){
    for ($j=0;$j<$m;$j++){
        $a[$i][$j]=rand(0,2);
    }
}
return $a;
}
define ("n",8);
define ("m",8);
 $a=CrearMatriz(n,m);

 foreach ($a as $v){
     foreach ($v as $v2){
         echo "$v2";
     }
     echo "<br/>";
 }
 
 echo "<br/><br/>";
  foreach ($a as $v1){
     foreach ($v1 as $v2){
         if($v2==0) echo "<b>".$v2."</b>";
         else echo "$v2";
     }
     echo "<br/>";
 }
 
 echo "<br/><br/>";
 
  foreach ($a as $c1=> $v1){
     foreach ($v1 as $c2=> $v2){
         if($v2==0){ 
            if(($a[$c1][$c2-1]==1 and $c2>0) or ($a[$c1][$c2+1]==1 and $c2<m-1) or ($a[$c1-1][$c2]==1 and $c1>0) or ($a[$c1+1][$c2]==1 and $c1<n-1)){
                echo "<b>".$v2."</b>";
            }
         else echo "$v2";
         }
         else echo "$v2";
     }
     echo "<br/>";
 }
 