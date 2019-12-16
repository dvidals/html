<?php

define ('PESO_ENTSUC', array(4,8,5,10,9,7,3,6));
define ('PESO_CUENTA', array(1,2,4,8,5,10,9,7,3,6));

class SoloNumerosException extends Exception{};
class No20DigitosException extends Exception{};

function codigo_cuenta_correcto($cuenta){

    

    
    $cuenta=str_replace(" ","",$cuenta);

    if (!ctype_digit($cuenta)) {

        //se hace necesario al principio utilizar ctype_digit() para eliminar los números negativos.
    
        throw new Exception('Una cuenta sólo está formada por números');
       

    } else if(strlen($cuenta)!==20){
        //exist ('La cuenta debe estar formada por 20 dígitos');
        throw new No20DigitosException ();
    }

$bloque_a=substr($cuenta,0,8);
$bloque_b=$cuenta[8];
$bloque_c = $cuenta[9];
$bloque_d=substr($cuenta,10);

$dig_control_sucursal=calcula_digito_control($bloque_a,PESO_ENTSUC);
$dig_control_cuenta=calcula_digito_control($bloque_d,PESO_CUENTA);

if($dig_control_sucursal !==intval($bloque_b)) return FALSE; // hay un problema porque los false devuelven cero entonces los casos false nos pueden dar problemas si no ponemos el intval();
// antes lo teníamos así  $dig_control_sucursal != $bloque_b



if($dig_control_cuenta !== intval($bloque_c)) return FALSE;

return TRUE;
}

function calcula_digito_control($bloque,$pesos){
    $len=count($pesos);
    if (strlen($bloque) != count($pesos)) return FALSE;
    $suma=0;
    for ($i=0;$i<$len;$i++){
        //$m=$bloque[$i]*$pesos[$i];
        //$suma=$suma+$m ; 
        $suma+=$bloque[$i]*$pesos[$i];
    }

        $con=11-$suma%11;
        if($con==11) $con=0;
        else if($con==10) $con=1;

        return $con;
}

//var_dump(codigo_cuenta_correcto('00491500051234567892'));