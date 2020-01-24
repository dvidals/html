<?php

function funcion($parametros){
    echo 'función: ' . implode(', ',$parametros) . '<br/>';
}

class Clase {
    function metodo($parametros){
        echo 'método: ' . implode(', ',$parametros) . '<br/>';
    }
    
}

call_user_func('funcion',array('par1', 'par2', 'par3'));


call_user_func('Clase::metodo',array('par1', 'par2', 'par3'));
call_user_func(array('Clase','metodo'), array('par1', 'par2', 'par3', 'par4'));

$obj = new Clase;
call_user_func(array($obj,'metodo'), array('par1', 'par2', 'par3', 'par4'));


