<?php

function Media ($n1,$n2,$tipo="aritmética"){
    if ($tipo=="aritmética"){
        $media=($n1+$n2)/2;
    }
    if ($tipo=="geométrica"){
        $media=sqrt($n1*$n2);
    }
    if($tipo=="armónica"){
        $media= 2* ($n1*$n2)/($n1+$n2);
    }
    return $media;
}

echo Media(4,8)."</br>";
echo Media (4,8,"geométrica")."</br>";
echo Media (4,8,"armónica")."</br>";
echo Media (4,8,"aritmética")."</br>";
?>
