<?php

$cadena="paleto";
function palindroma ($cadena){
    $a=str_split($cadena);
    $b=true;
  
    for ($i=0;$i<strlen($cadena);$i++){
       
        
        if ($a[$i]==$a[strlen($cadena)-1-$i]);
        else $b=false;     
    }
    if($b) echo "$cadena es palíndroma </br>"; 
    else echo "$cadena no es palíndroma </br>";
}

function amigos ($n1, $n2){
    $a1=0;
    $a2=0;
  for ($i=1;$i<=$n1/2;$i++){
      if ($n1%$i==0) $a1=$a1+$i;
  }  
  for ($i=1;$i<=$n2/2;$i++){
      if ($n2%$i==0) $a2=$a2+$i;
  }  
  if ($a1==$n2 and $a2==$n1) echo "$n1 y $n2 son números amigos </br>";
  else echo "$n1 y $n2 no son números amigos </br>";
  }
  
function primos1mil(){
    $a="";
    $b=true;
    for ($i=2;$i<=1000;$i++){
        for ($j=2;$j<$i;$j++){
            if ($i%$j<>0);
            else $b=false;
        }
       if($b) $a="$a, $i";
       $b=true;
    }
    
    echo substr($a,1,-5)." y ".substr($a,-3)."</br>";
}
function reves($cadena){
  $a=str_split($cadena);
  $b=str_split($cadena);
  for ($i=0; $i<strlen($cadena);$i++){
      $a[i]=$b[strlen($cadena)-1-$i];
      echo $a[i];
    }  
    echo "</br>";
}

function mediaA($n1,$n2){
    $s=$n1+$n2;
    $m=$s/2;
    echo $m."</br>";
}
function mediaG ($n1,$n2){
    $p=$n1*$n2;
    $m=sqrt($p);
    echo $m."</br>";
}

function tabla(){
    for ($i=0; $i<=10;$i++){
         echo"<hr>";
        for ($j=0;$j<=10;$j++){
           echo"$i x $j=".$i*$j."</br>";
        }
    }
}
 

echo palindroma ($cadena);
echo amigos (284,220);
echo primos1mil();
echo reves($cadena);
echo reves ("mami eres la mujer mas buena del mundo");
echo mediaA(5,6);
echo mediaG(2,18);
echo tabla();
?>
