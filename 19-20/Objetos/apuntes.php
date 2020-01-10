<?php

/*class clase{
    //declaración propiedades
    const CONSTANTE="valor"; //en estructurada se utilizaba define para definir constantes.

    //declarción métodos
}
*/

class NotValidEmailException extends Exception{}

class Persona {
    //declaración propiedades
    public $nombre;
    public $edad;
    private $email;
    public $amigos=array();


    //declaración métodos
    function __construct($nombre,$edad,$email){
        $this->setNombre($nombre);
        $this->edad=$edad;
        $this->setEmail($email);
    }

    public function printPersona(){
        echo "Persona:<br/>";
       echo 'nombre: '.$this->nombre.'<br/>';
       echo 'edad: '.$this->edad.'<br/>';
       echo 'email: '.$this->email.'<br/>';
       echo '</br>';
    }

    
    function getNombre(){
        return $this->nombre;
    }

    function setNombre($nombre){
        $this->nombre=$nombre;
    }


    function getEdad(){
        return $this->edad;
    }

    function setEdad($edad){
        $this->edad=$edad;
    }
    function getEmail(){
        return $this->email;
    }

    function setEmail($email){
        if (filter_var($email,FILTER_VALIDATE_EMAIL)){
        $this->email=$email;
    }else{
        throw new NotValidEmailException();
    }
}


}


/*$p= new Persona("Paco",44,"paco@paco.es");
 $p->nombre="Manolo";
$p->setNombre("Manolo");
 echo $p->getNombre()."<br/>";
 $persona1=new Persona("David Vidal",42,"despedidachicho@hotmail.com");
 $persona1->printPersona();
*/
$persona2;
 try{
$persona2= new Persona("Pablo",23,"hola@hola.es");
 }catch(NotValidEmailException $e){
     echo ("Email no válido. No se ha podido crear el objeto");

 }
 echo'<br/>';
//var_dump(isset($persona2)); //probar luego: echo(isset($persona2));
echo'<br/>';
//var_dump($persona2->getEmail());
if(isset($persona2))var_dump($persona2); // Diferencia con lo de abajo (propiedades privadas)

/*
if(isset($persona2)){
    var_dump($persona2);
    echo '<br/>';
    echo($persona2->email);
}
*/
//Nota importante, con var_dump() puedo mostrar variables privadas y con echo no. 

$email="hola";
if (filter_var($email,FILTER_VALIDATE_EMAIL)){
    $persona2->email=$email;

}
