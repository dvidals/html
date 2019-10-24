<?php
/*Atope o primeiro carácter que é diferente entre dúas cadeas
Cadea1 : 'casa'    Cadea2 : 'cata'    --> Exemplo de saída : Primeira diferenza na posición 3: "s" vs "t" */
$cadena1='casa';
$cadena2='cata';
$cadena1 = str_split($cadena1);
$cadena2 = str_split($cadena2);
$b = true;

if ($b) {
    for ($i = 0; $i < count($cadena1); $i++) {
        if ($cadena1[$i] == $cadena2[$i]);
        else{
            $b = false;
            $j=$i+1;
            echo "Primeira diferenza na posición $j: $cadena1[$i] vs $cadena2[$i]";
        }
    }
}
