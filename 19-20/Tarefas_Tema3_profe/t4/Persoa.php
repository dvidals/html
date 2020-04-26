<?php
//Clase que representa a unha Persoa
class Persoa {
    protected $nome;
    protected $apelidos;
    protected $mobil;
    public function __construct($nom, $ape, $mobil)
    { 
        $this->nome=$nom;
        $this->apelidos=$ape;
        $this->mobil=$mobil;
    }
    public function verInformacion()
    {
        return $this->nome.' '.$this->apelidos.' ('.$this->mobil.')';
    }

    public function __toString()
   {
	return $this->verinformacion();
   }
}
?>


