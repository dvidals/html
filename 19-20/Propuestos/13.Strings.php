<?php
/*
a) transforme unha cadea en maiúsculas
b) transforme unha cadea en minúsculas
c) converte a primeira letra da oración en maiúscula
d) converte a primeira letra de cada palabra da oración a maiúsculas
Crea 4 funciones para cada funcionalidad. La página tendrá un único input para la cadena, el modo de elegir la funcionalidad es abierto (botones, un selector…)
*/
//$c="matutina eS tu maSCota";
$n = $_POST['ma'];
$cadena = $_POST['cadena'];

//echo $cadena; comprobamos que $cadena guardó lo que le entró por el POST.
//echo $n;  nos daría el valor de de 
//var_dump($n); nos valdría para comprobar también el valor de $n


function ma ($cadena){
$cadena=strtoupper($cadena);
echo $cadena."<br>";
}


function mi ($cadena){
    $cadena=strtolower($cadena);
    echo $cadena."<br>";
}
 
 
function ora ($cadena){
    $cadena=ucfirst($cadena);
    return $cadena."<br>";
}
 
 

function pa ($cadena){
    $cadena=ucwords($cadena);
    return $cadena."<br>";
}

 
 
if ($n==1) ma($cadena);
if ($n==2)  mi($cadena);
if ($n==3)  echo ora($cadena);
if ($n==4)  echo pa($cadena); 


/*
echo ma($c);
echo mi($c);
echo ora($c);
echo pa($c);
*/
?>