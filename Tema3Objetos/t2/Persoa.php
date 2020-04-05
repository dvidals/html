<?php

declare(strict_types=1);

class Persoa {
    //private const HOME='H';
   
    private   $nome;
    private  $dataNacemento;
    private  $sexo;
    
    public function __construct(string $nom, string $nac, 
        string $sexo='H') { 
        $this->nome=$nom;
        $this->dataNacemento = new DateTime($nac);
        // Para comprobar que a data é válida
        $this->sexo = strtoupper($sexo);
    }

    public function diasVivo() : DateInterval {
        return $this->dataNacemento->diff(new DateTime);
    }

    public function __toString() {
        $sexo= 'Descoñecido';
        if ($this->sexo==='H') $sexo= 'Home';
        elseif ($this->sexo==='M') $sexo= 'Muller';

        return $this->nome
            . ' ten '. $this->diasvivo()->format('%y anos, %m meses, %d días, un total de %a días.')
            . '<br/>O seu sexo é ' . $sexo . '<br/>';
    }
}
?>


