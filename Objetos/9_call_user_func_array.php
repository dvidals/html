<?php

function funcion1($parametros){
    echo 'función1: ' . implode(', ',$parametros) . '<br/>';
}

function funcion2($parametros){
    echo 'función2: ' . implode('; ',$parametros) . '<br/>';
}

class Clase {
    function metodo($parametros){
        echo 'método: ' . implode('-',$parametros) . '<br/>';
    }
    
}


$funciones=array('funcion1','funcion2');

foreach($funciones as $funcion){
    call_user_func($funcion,array('par1', 'par2', 'par3'));

}

echo "<br/><br/>";
call_user_func('funcion1',array('par1', 'par2', 'par3'));
call_user_func('funcion2',array('par1', 'par2', 'par3'));


call_user_func('Clase::metodo',array('par1', 'par2', 'par3'));
call_user_func(array('Clase','metodo'), array('par1', 'par2', 'par3', 'par4'));

$obj = new Clase;
call_user_func(array($obj,'metodo'), array('par1', 'par2', 'par3', 'par4'));
