<?php
   function __autoload($clase) {  
     require_once 'clases/'.$clase . '.php';  
   }

    $op=new Suma(10,10);
   $op->calcular();
   echo 'O resultado da suma é '.$op->getResultado();
   $opr=new Resta(50,20);
   $opr->calcular();
   echo '<br />O resultado da resta é '.$opr->getResultado();
   
   $opr2=new Resta();
   $opr2->setOperando1(50);
   $opr2->setOperando2(20);
   $opr2->calcular();
   echo '<br />O resultado da resta é '.$opr->getResultado();
   
?>


