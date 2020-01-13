<?php
class NotValidEmailException extends Exception{}



class Usuario {

    
    //propiedades (estado)

    public static $contador=0;
    public $username="";
    private $email;


    //comportamiento (verbos)

    function muestraNombre():String{
        return $this->username;
    }

    function getEmail(){
        return $this->email;
    }

    function setEmail($username){
        if (filter_var($email,FILTER_VALIDATE_EMAIL)){
        $this->email=$username;
    }else{
        throw new NotValidEmailException();
    }
}

function __construct($username,$email){
    if(!($this->check_email($email))) $email=NULL; //Cuando no se cumple que el e-mail es válido lo asigna a NULL.
    $this->username=$username;
    $this->email=$email;
    
}

    function saludar(){
        echo "hola";
    }


    //Get como método mágico, valdrá para todas las propiedades y se mete como parámetro el atributo
    //Con el get si que obtenemos una propiedad privada(EXPLICAR)
    //Con el método mágico de get también se accede al atributo sin tener que poner el dólar.
    //Ver después: propiedad a la que no queremos que se acceda en ningún caso.

    //CLASS es una constante mágica que indica en que clase estás, elige la clase en la que estás.

    function __get($atributo){

        if (property_exists($this,$atributo)){ //en esa línea se puede substituir $this por CLASS, en cambio abajo no se puede poner $this.
            //if ($atributo=='email')return null; para cuando no quiero mostrar esa propiedad nunca.
            $this->$atributo;
        }
       else echo "llamada a propiedad inexistente ($atributo) de la clase".__CLASS__;
        
    }

    function __set($atributo,$valor){
        if ($atributo=='email') {
        if($this->check_email($valor)) return;
        }
        /*&& 
        (!filter_var($valor,FILTER_VALIDATE_EMAIL)))
        throw new NotValidEmailException();*/
            $this->$atributo=$valor;
    }


    private static function check_email($email): bool{       //este método sólo se va a usar en esta clase, entonces le pongo private, no se puede llamar desde otro clase. 
  //static es cuando es independiente de las propiedades del objeto, es un funcionamiento estructurado que no tiene nada que ver objetos.                                                                            
        return (filter_var($email,FILTER_VALIDATE_EMAIL)? TRUE: FALSE);

    }

    
}

$u1= new Usuario("Alejandro", "avd.formacion@gmail.com");
echo $u1->username;echo'<br/>';
echo $u1->email;echo'<br/>';
echo $u1->getEmail();echo'<br/>';//ya no sería necesario cuando tenemos el método mágico get.
//$u1->email="hola"; //no se puede poner con dolar porque dolar email  no está definido
$email='email'; //explicar
$u1->$email="hola@es.es";

echo $u1->apellido;echo'<br/>';
echo $u1->email;echo'<br/>';

//$u1->setEmail('asda@asdad.asd');

print_r(get_class_var('Usuario')); echo'<br/>';
print_r(get_class_method('Usuario'));echo'<br/>';