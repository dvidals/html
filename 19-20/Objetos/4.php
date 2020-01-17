<?php

// Usando excepción para que el objeto no llegue a crearse en el constructor si no se cumple la condición comprobada en él.

class NotValidEmailException extends Exception{}

class Usuario {

	public $username ="";
	private $email;


    function __construct($username, $email){
      $this->username = $username;
      if (!(self::check_email_static($email)))
      	throw new NotValidEmailException();
      $this->email = $email;
    }

    private static function check_email_static($email) : bool {
    	return (filter_var($email, FILTER_VALIDATE_EMAIL) ? TRUE : FALSE);
    }
}

try {
	$u1 = new Usuario("usuario1", "avd.formacion@gmail.com");
	$u2 = new Usuario("usuario2", "avd.formaciongmail.com");
	$u3 = new Usuario("usuario3", "avd.formacion@gmail.com");
} catch (NotValidEmailException $e){
	//unset($u1);
	echo "objeto no creado <br/>";
}
try {
	$u4 = new Usuario("usuario4", "avd.formacion@gmail.com");
} catch (NotValidEmailException $e){
	//unset($u1);
	echo "objeto no creado <br/>";
}
var_dump($u1); echo '<br/>';
var_dump(isset($u1)); echo '<br/>';
var_dump($u2); echo '<br/>';
var_dump(isset($u2)); echo '<br/>';
var_dump($u3); echo '<br/>';
var_dump(isset($u3)); echo '<br/>';
var_dump($u4); echo '<br/>';
var_dump(isset($u4)); echo '<br/>';



