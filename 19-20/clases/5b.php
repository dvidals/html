<?php

/*Tarefa 5. Definición e uso de métodos e clases abstractas. 
a)Tarefa 5_aDefine   unha   clase   abstracta   de   nome   Calculo   que   teña   como   atributos   $operando1 $operando2   e   $resultado   
e   que   defina   os   métodos   setOperando1,   setOperando2,getResultado   e   un   método   abstracto   calcular. 
A continuación   define   tres   subclases   desta clase que teñen como obxectivo realizar as operacións de suma, resta e multiplicación.
- Antes de realizar a operación debes comprobar que os operandos teñen algún valor.
- As clases e subclases que crees deben estar nunha carpeta de nome clases.
 No script onde comprobes o funcionamento destes cálculos debes facer que se carguen automaticamentetodas as clases que se atopen nesa carpeta.
 b)Tarefa 5_bModifica a tarefa 5_a para que reciba os valores dos operandos cando se define o obxecto.*/

 spl_autoload_register(function($nombre_clase){
            include_once $nombre_clase.'.php';
        });

$obj= new Resta();
$obj2= new Suma();
$obj3= new Multiplicacion();
$obj->setOperando1(5);
$obj->setOperando2(4);

//echo $ojb->__get($operando1);//No funciona
//echo Calculo::__get($operando1);//No funciona


echo $obj->calcular();
var_dump($obj);