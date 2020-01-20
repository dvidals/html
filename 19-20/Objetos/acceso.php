<?php
//para que quede más bonito en el navegador, los notice etc, ponemos en consola: sudo apt update && apt install php-xdebug && service apache2 restart
class Nivel1 {

	private $privatePublic='privatePublic';
	private $privateProtected='privateProtected';
	private $privatePrivate='privatePrivate';
	
	protected $protectedPublic='protectedPublic';
	protected $protectedProtected='protectedProtected';
	protected $protectedPrivate='protectedPrivate';
	
	public $publicPublic='publicPublic';
	public $publicProtected='publicProtected';
    public $publicPrivate='publicPrivate';

    public function getPrivatePublic() { return $this->privatePublic; }
    protected function getPrivateProtected() { return $this->privateProtected; }
    private function getPrivatePrivate() { return $this->privatePrivate; }
    
	public function getProtectedPublic() { return $this->protectedPublic; }
    protected function getProtectedProtected() { return $this->protectedProtected; }
    private function getProtectedPrivate() { return $this->protectedPrivate; }
    
	public function getPublicPublic() { return $this->publicPublic; }
    protected function getPublicProtected() { return $this->publicProtected; }    
    private function getPublicPrivate() { return $this->publicPrivate; }

    public function __isset($property){
        return isset($this->$property);
    }

}

class Nivel2 extends Nivel1 {

    function getGetPrivatePrivate() {
        return isset($this->privatePrivate);
    }

    function getGetPrivateProtected() {
        return $this->getPrivateProtected();
    }

}

$n2 = new Nivel2();

var_dump($n2);

echo '<br/>'. $n2->getGetPrivateProtected(); //se accede a todas las propiedades, también las privadas heredadas. Comprobamos que si los objetos heredan las propiedades
//privadas de las clases padre, aunque sean privadas. En cambio las clases no heredan las propiedades privadas.
echo '<br/>'. $n2->privatePublic;   //estamos intentando acceder a una propiedad privada directamente, sin un get()
//echo '<br/>'. $n2->protectedPublic;
echo '<br/>'. $n2->getPrivatePrivate();
echo '<br/>'. $n2->getPrivatePublic();