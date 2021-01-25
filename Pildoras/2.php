<?php
$semana=array("Lunes","Martes","Miércoles","Jueves");
$datos=array("Nombre"=>"Juan","Apellidos"=>"Vidal de Sa", "Edad"=>43);
for ($i=0;$i<4;$i++){
	echo $semana[$i]."<br/>";
}
for ($i=0;$i<count($semana);$i++){

echo $semana[$i]."<br/>";  
}

$numeros=array(4,3,9,14,17,21,8,6);
$datos["País"]="España";
$semana[]="Viernes";
//sort($datos);
sort($semana);
sort ($numeros);
foreach ($semana as $valor){
	echo  $valor."</br>";
}

foreach ($datos as $clave=>$valor){             //para recorrer un array asociativo.
	
	echo "A $clave le corresponde $valor <br>";
}

for ($i=0;$i<count($numeros);$i++){

    echo $numeros[$i]."<br/>";  
    }

$alimentos=array("fruta"=>array("tropical"=>"kiwi",
                                "cítrico"=>"mandarina",
                                 "otros"=>"manzana"),
                 "leche"=>array("animal"=>"vaca",
                                "vegetal"=>"coco"),
                 "carne"=>array("vacuno"=>"lomo",
                                "porcino"=>"pata"));

echo $alimentos["carne"]["vacuno"]."<br/>"; //impreme en pantalla lomo

//Mostrarlo en pantalla:

foreach ($alimentos as $clave=>$valor){
    echo "El contenido de $clave es: <br/>";
    foreach($valor as $clave2=>$valor2){
        echo "$clave2=$valor2<br/>";
    }
    echo "<br/>";
}

var_dump($alimentos);


?>