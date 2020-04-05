<?php
echo reves("pablo te quiero");
function MediaG ($n1,$n2){
    $r=sqrt($n1*$n2);
    echo $r;
}

function MediaA ($n1, $n2){
    $r=($n1+$n2)/2;
    echo $r;
}

function tabla($n){
    for ($i=0;$i<=$n;$i++){
        echo "<hr>";
        for ($j=0;$j<=$n;$j++){
            
          echo "$i x $j = ".$i*$j."</br>";
            
        }
    }
}

function primos ($n){
    if($n<=10){
        $z=5;
        $y=3;
        $x=1;
    }
    if($n>10 and $n<=100){
        $z=6;
        $y=5;
        $x=3;
        
    }
    if($n>100 and $n<=1000){
        $z=7;
        $y=5;
        $x=3;
        
    }
    $b=true;
    $a="";
    for ($i=2;$i<$n;$i++){
        for ($j=2;$j<$i;$j++){
            if ($i%$j<>0);
            else $b=false;
        }  
        if($b) $a=$a.$i."; ";
        $b=true;
        }
       
        echo substr($a,0,strlen($a)-$z)." y ".substr($a,strlen($a)-$y,$x);
}
function amigos ($n1,$n2){
    $a1=0;
    $a2=0;
    for ($i=1;$i<$n1;$i++){
        if ($n1%$i==0)
            $a1=$a1+$i;  
    }
    for ($j=1;$j<$n2;$j++){
        if ($n2%$j==0)
            $a2=$a2+$j;  
    }
    if($a1==$n2 and $a2==$n1) echo "$n1 y $n2 son números amigos";
    else echo "$n1 y $n2 no son números amigos";
}

function sumaN($n){
    $a=0;
    for ($i=0;$i<=$n;$i++){
        $a=$a+$i;
    }
    echo $a;
}
function sumaEntre($n1,$n2){
    $a=0;
    $ab=abs($n1-$n2);
    for ($i=0;$i<=$ab;$i++){
        $a=$a+$i+$n1;           
    } 
    echo $a;
}
        
function palindroma ($p){
    $b=true;
    $a=str_split($p);
    for ($i=0; $i<strlen($p);$i++){
        if ($a[$i]==$a[strlen($p)-1-$i]);
        else $b=false;   
    }
    if($b) echo "$p es palíndroma";
    else echo "$p no es palíndroma";
            
}
function reves ($p) {
   /* $a=str_split($p);
    $b=str_split($p);
    for ($i=0; $i<strlen($p);$i++){
        $a[$i]=$b[strlen($p)-$i-1];
        echo $a[$i];
    }
    */
    //o con implode
    
    $a= str_split($p);
    $b=str_split($p);
    for ($i=0; $i<count($a); $i++){
        $a[$i]=$b[count ($a)-$i-1];   
    }
  $c= implode("", $a);
          echo $c;
}
?>
