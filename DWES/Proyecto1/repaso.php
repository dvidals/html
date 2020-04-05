<?php
$palabra="palabra";
$n=12;
$nu=12;
function palindroma ($p){
    
   $a=str_split($p);
   $b=true;
    for ($i=0; $i<count($a);$i++){
        if($a[$i]==$a[count($a)-$i-1]);
        else $b=false;
    }
    if ($b) echo "$p es palíndroma";
    else echo "$p no es palíndroma";
    echo "</br>";
}

function tabla($n){
    for ($i=0;$i<=$n;$i++){
         echo "<hr>";
        for ($j=0;$j<=$n;$j++){
            echo "$i x $j= ".$i * $j;
            echo "</br>";
           
        }
    }
     echo "</br>";
}
function SumaN($nu){
    $a=0;
    for ($i=0;$i<=$nu;$i++){
        $a=$a+$i;
    }
    echo $a;
    echo "</br>";
}
function SumaEntre ($n1,$n2){
    $ab=abs($n1-$n2);
    $a=0;
    if($n2>=$n1){
        for ($i=0;$i<=$ab;$i++){
            $a=$a+$n1+$i;
        }
        $b=$a-$n1-$n2;
    }
    echo $b;
    echo "</br>";
}
function primos ($n){
    $b=true;
    $a="";
    for ($i=2; $i<$n;$i++){
        for($j=2;$j<$i;$j++){     
        if($i%$j<>0) ;
        else{
            $b=false;
            
        }
        
        }
        if($b) $a=$a.$i."; ";
        $b=true;
    }
//echo substr($a, -5);
echo substr($a, 0, strlen($a)-6)." y ".substr($a,strlen($a)-5, 3);
echo "</br>";
}
function amigos ($n1,$n2){
    $a1=0;
    $a2=0;
    for ($i=1; $i<$n1;$i++){
        if($n1%$i==0)
            $a1=$a1+$i;  
    }
    for ($j=1;$j<$n2;$j++){
        if ($n2%$j==0)
            $a2=$a2+$j;              
    }
    if ($a2==$n1 and $a1==$n2) echo "$n1 y $n2 son amigos";
    else echo "$n1 y $n2 no son amigos";
    echo "</br>";
}
//echo amigos (220,284);

function alreves ($p){
   /* $a=str_split($p);
    $b=true;
    for ($i=0;$i<strlen($p);$i++){
        $a[i]=$a[strlen($p)-1-$i];
        $c[i]=$a[i];
        $d=implode("",$c);
        echo $d;
    }*/
   //o de esta forma:
    $a=str_split($p);
    $b=str_split($p);
    for ($i=0; $i<strlen($p);$i++){
        $a[$i]=$b[strlen($p)-1-$i];
        echo $a[$i];
    }
    echo "</br>";
}


?>


