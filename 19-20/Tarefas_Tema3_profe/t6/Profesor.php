<?php
require_once 'Persoa.php';
require_once 'Baile.php';
require_once 'Comparar.php';

final class Profesor extends Persoa implements Comparar{
    private $nif;
    private $bailes=array();
    private $idade;
    
    public function __construct($nom, $ape, $mobil, $nif, $idade)
    {     
        parent::__construct($nom, $ape, $mobil);
        $this->nif=$nif;
        $this->idade=$idade;
    }

     //o importe da hora poder�a non indicarse
    public function calcularSoldo($horas,$importeHora=16) {
        return $horas*$importeHora;
    }
    public function engadirBaile($nomeBaile,$idademin=8) {
        if (!empty($this->bailes)) {
            foreach($this->bailes as $baile)  
            {
                if ($baile->getNome()==$nomeBaile) { return; }
            }
        } 
        $this->bailes[]=new Baile($nomeBaile,$idademin);
    }
    public function eliminarBaile($nomeBaile)
    {
        foreach($this->bailes as $baile)  
        {
            if ($baile->getNome()==$nomeBaile) {
                $key = array_search($baile,$this->bailes,TRUE);
                unset($this->bailes[$key]);
            }
        }
    }
    public function getBailes() {
        $cad='<br />';
        foreach($this->bailes as $baile)
        {
            $cad=$cad. $baile->getNome().' (idade min:'.$baile->getIdadeMinima().
                  ' anos)<br />';
        }
        return $cad;
    }

    public function verInformacion()
    {
        return parent::verInformacion().' - ['.$this->idade.' anos]';

    }    
    public function comparar($value) {
        try {
            if (!$value instanceof Profesor) {
                throw new Exception('Non � un profesor');
            } else {
                 if ($this->idade > $value->idade) {
                    return ' ten m�is anos que ';
                }
                 elseif ($this->idade < $value->idade) {
                    return ' ten menos anos que ';
                }
                return ' ten a mesma idade que ';
            }
        } catch (Exception $e) {
                echo 'Excepci�n capturada: ',  $e->getMessage(), "\n";
        }
    }
}

?>