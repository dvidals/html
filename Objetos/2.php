<?php

class NotValidEmailException extends Exception{};

class Usuario {

	static $contador=0;

	public $username ="";
	private $email;

	
	 
	
    function __get($atributo){
    	//return $this->email;

      if (property_exists($this, $atributo)) {
      	//if ($atributo == 'email') return null;
    	return $this->$atributo;
   	  }
   	   else echo "llamada a propiedad inexistente ($atributo) de la clase " . __CLASS__;

    }

 /*   function __set($atributo, $valor){
      if ($atributo == 'email') {
        if (!(self::check_email_static($valor))) return;
      } // && (!filter_var($valor, FILTER_VALIDATE_EMAIL)))
        //    throw new NotValidEmailException(); 
      $this->$atributo = $valor;
   
    }
*/

    function __set($atributo, $valor){
      if ($atributo == 'email') {
          $this->$atributo = $valor;//la he puesto yo porque si no compara con la que tenía (en este caso email@pordefecto.com).Primero hay que poner en el email el $valor y luego aplicar check_email()
        if (!($this->check_email())) $this->email=NULL;
        else $this->$atributo = $valor;
      }
      else{
        $this->$atributo = $valor;
    }


   
    }

    function __construct($username, $email){
      $this->username = $username;
      if (!(self::check_email_static($email))) {
        $this->email = "email@pordefecto.com";
        return;
      }
      $this->email = $email;
     // if (!($this->check_email())) $this->email=NULL;

    }

    private function check_email() : bool {
    	return (filter_var($this->email, FILTER_VALIDATE_EMAIL) ? TRUE : FALSE);
    }

    private static function check_email_static($email) : bool {
    	return (filter_var($email, FILTER_VALIDATE_EMAIL) ? TRUE : FALSE);
    }
}


$u1 = new Usuario("Alejandro", "avd.formaciongmail.com");

var_dump($u1);

echo $u1->username; echo '<br/>';
echo $u1->email; echo '<br/>';


$u1->email = "hol.a";

$u1->apellido= "apellido";

var_dump($u1); 

$u1->email="hola@hola.es";
var_dump($u1);
//echo $u1->apellido; echo '<br/>';
//echo $u1->email; echo '<br/>';

//print_r(get_class_vars('Usuario')); echo '<br/>';
//print_r(get_class_methods('Usuario'));
