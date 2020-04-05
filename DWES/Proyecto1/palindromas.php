<?php
$pablo="soletatelos";

function palindroma ($palabra){
    
    $palabra;
    echo strlen($palabra)."</br>";
    $array=str_split($palabra);
    $b=true;
   // echo "$b"."</br>";
    
    
    for ($i=0;$i<strlen($palabra);$i++){
        
        echo $array[$i]."</br>";
        
        if($array[$i]==$array[strlen($palabra)-1-$i]){
            
           
                  
            
        }else $b=false;
        
    }
   // echo $b;
     if($b) echo"$palabra es palíndroma";
       else echo"$palabra no es palíndroma";
}
echo palindroma ($pablo);
?>
