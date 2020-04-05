<?php

function primoMil (){
    $b=true;
    $c=0;
    $cadena="";
    for ($n=2; $n<=1000;$n++){
         
        for($i=2;$i<$n;$i++){
            
           
            if ($n%$i<>0) ;
            else $b=false;  
            
           }
        if($b) $cadena=$cadena."$n, ";
        else $b=true;
        
    }
    
    
    echo $cadena=substr($cadena,0,-2);
   
}
echo primoMil();
?>
