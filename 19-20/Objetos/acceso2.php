<?php
//para que quede más bonito en el navegador, los notice etc, ponemos en consola: sudo apt update && apt install php-xdebug && service apache2 restart
class Nivel1 {

	private $private='private';

	
	protected $protected='protected';
	
	
	public $public='public';
	

   function __get($prop){
    echo 'n1 <br/>';
    return $this->$prop;
    }

}

class Nivel2 extends Nivel1 {
    private $n2privado='n2privado';

    function __get($prop){
        echo 'n2 <br/>';
        return $this->$prop;
        }
    
    
}
$n2 = new Nivel2();

var_dump($n2);
echo '<br/>'. $n2->private; //probarlo comentando el método mágico para ver lo que ocurre (dice que private no está definida (notice))
echo '<br/>'. $n2->noExiste;
echo '<br/>'. $n2->protected;



//sobrecarga: llamar a 2 métodos con el mismo nombre. (overload). 
//Sobrecarga es la capacidad de un lenguaje de programación, 
//que permite nombrar con el mismo identificador diferentes variables u operaciones.
//En programación orientada a objetos la sobrecarga se refiere a la posibilidad de tener dos o más funciones con el mismo nombre pero funcionalidad diferente.
// Es decir, dos o más funciones con el mismo nombre realizan acciones diferentes. El compilador usará una u otra dependiendo de los parámetros usados. 
//A esto se llama también sobrecarga de funciones. 
//El mismo método dentro de una clase permite hacer cosas distintas en función de los parámetros. 

//sobreescritura: un mismo método lo vuelves a definir en la clase hija. (overwritte).
// para pasar un número variable de argumentos se utilizan los 3 puntos (se podría pasar un array).
// ver php.net/manual/es/functions.arguments.php

// super y parent se llaman desde un constructor.

//La palabra final se utiliza para declarar que un método o clase no puede ser sobreescrito por una clase hija.
//El modificador abstract indica que una clase o método no puede instanciarse y sólo puede heredarse,
// transladando su funcionamiento obligatorio a las clases hijas.

//final function significa que esa función no puede ser sobreescrita

//static class en Java: todas las variables y métodos tienen que ser estáticos.

//diego.com.es/modificadores-y-herencia-de-clases-en-php.
// 