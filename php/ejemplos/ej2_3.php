<?php
$valoracion= 4;
$salario=12000;
if ($valoracion >= 3) {
    if ($salario < 15000) {
        $salario += 5000;  // incremento de salario: 5000
    }    
} else {     	// resto de empleados
    if ($salario < 15000) {     
        $salario += 3000;       // incremento de 3000
    }        
}
echo $salario;
?>
