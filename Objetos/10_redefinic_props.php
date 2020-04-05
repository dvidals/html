<?php

class clase1 {

    protected $a = '111';

    function dame_a() {
        return "($this->a)<br>";
    }

}

class clase2 extends clase1 {

    protected $a = '2222'; //importante: se sobreescribe la variable del padre, si fuera privado no (explicar);

    function dame_a() {
        echo parent::dame_a();
        echo "[[$this->a]]<br>";
    }

}

$o = new clase2();
$o->dame_a();
?>
