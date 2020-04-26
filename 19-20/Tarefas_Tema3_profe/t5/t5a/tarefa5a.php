<?php
   function __autoload($clase) {  
     require_once 'clases/'.$clase . '.php';  
   }

    $op=new Suma();
    $op->setOperando1(10);
    $op->setOperando2(10);
    $op->calcular();
    echo 'O resultado da suma é '.$op->getResultado();
    $opr=new Resta();
    $opr->setOperando1(50);
    $opr->setOperando2(10);
    $opr->calcular();
    echo '<br />O resultado da resta é '.$opr->getResultado();
    $opm=new Multiplicacion();
    $opm->setOperando1(30);
    $opm->setOperando2(20);
    $opm->calcular();
    echo '<br />O resultado da multiplicación é '.$opm->getResultado();
    $opd=new Division();
    $opd->setOperando1(30);
    $opd->setOperando2(20);
    $opd->calcular();
    echo '<br />O resultado da división é '.$opd->getResultado();
?>


