<?php

class Nivel1 {
	private $private='private';	
	protected $protected='protected';
	public $public='public';

    function __get($prop) {
    	echo 'n1'. '<br/>';
        return $this->$prop;
    }
}

class Nivel2 extends Nivel1 {
	private $n2privado='n2privado';

    function __get($prop) {
    	echo 'n2'. '<br/>';
        return $this->$prop;
    }

}

$n2 = new Nivel2();
var_dump($n2);

//echo '<br/>'. $n2->private;
echo '<br/>'. $n2->protected;
echo '<br/>'. $n2->n2privado;

$n2->noExiste = "hola";
var_dump($n2);
echo '<br/>'. $n2->noExiste;
