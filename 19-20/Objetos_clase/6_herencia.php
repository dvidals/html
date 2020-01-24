<?php

class Perro
{
    protected $nombre='Troski';

    protected function _ladrar(){
        print "Guau!";
    }

    function __set($prop,$valor){
    	$this->$prop=$valor;
    }

    function __get($prop){
    	return $this->$prop;
    }
}

class Bulldog extends Perro {
    public function ladrarBulldog(){
        return $this->ladrar();
    }
    
    function __set($prop,$valor){
    	$this->$prop=$valor;
    }

    function __get($prop){
    	return $this->$prop;
    }
}

$bulldog = new Bulldog;
//$bulldog->nombre='Tobi';
echo $bulldog->nombre;
var_dump($bulldog);