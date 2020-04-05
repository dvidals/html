<?php

function tabla(){
     echo "<hr>";
    for ($i=0;$i<=10;$i++){
        for($j=0;$j<=10;$j++){
            $r=$i*$j;
           
            echo"$i*$j=$r</br>";
        }
        echo"<hr>";
    }
}
echo tabla();
?>
