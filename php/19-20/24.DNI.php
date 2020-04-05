<?php

/*
 Crear una página que compruebe la validez de DNIs.

 */
$dni=$_POST['dni'];
function DNI($dni){
    $letra=array(T,R,W,A,G,M,Y,F,P,D,X,B,N,J,Z,S,Q,V,H,L,C,K,E);
    $b=true;
    $dni=  str_split($dni);
    
    // Primera comprobación y primera sorpresa. Las letras en medio del DNI no las identifica como tales aunque las imprima por pantalla. 
    // la expresión <> [a-zA-z] parece no tener ningún efecto sobre las letras, como si no estuvieran incluidas en ese intervalo, aunque luego las pinta por pantalla
    for ($i=0;$i<=7;$i++){
        if($dni[$i]<>[a-zA-z]) echo $dni[$i];
       
    }
    
    // Parte de lo que pretencía ser nuestra función:
    for ($i=0;$i<=7;$i++){
        if($dni[$i]>=0 and $dni[$i]<=9 and $dni[$i]<>[a-zA-z]) 
            echo intval($dni[$i]); //esta línea sólo la usamos como comprobación, saca por pantalla las letras como ceros.
        else $b=false;    
    }
    var_dump($b);//$b siempre es true, por lo que el resto de la función ya no tiene sentodo.
    
    // Lo que sería nuestra segunda parte de la función:
    if(!$b) echo "El DNI debe de incluir 8 números seguidos de una letra al final sin separación por un guión. Ejemplo: 36128619N";
    else {
        
            $clave=intval(implode("",$dni))%23; //convierto el array en string y el string lo convierto en número, pero el módulo siempre da uno.
            var_dump($dni)."<br>";
            echo intval($dni); //el valor del array siempre da uno
            echo"<br>";
            echo "$clave<br>"; // el valor del módulo, como ya habíamos dícho siempre da uno.
            if ($letra[$clave]==$dni[8]) echo "DNI perfectamente escrito con letra $letra[$clave]";
            else echo "La letra $dni[8] es errónea, tendría que ser $letra[$clave]"; // por lo tanto la letra del DNI siempre será R.
        
    }
    
}
echo DNI($dni);
?>
