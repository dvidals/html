<?php

class EmpregadoAsalariado extends Empregado {    
   private $salarioAnual;
   const PAGAS=14;
   
   public function __construct(string  $nome, string $apelido1, string $apelido2,
            string $NSS, int $aumento, float $salario) {
       parent::__construct($nome, $apelido1, $apelido2, $NSS, $aumento);
        $this->salarioAnual=$salario;
   }

   public function salarioMes() : string {
      $this->incrementarSalario(); 
      return number_format($this->salarioAnual/EmpregadoAsalariado::PAGAS, 2, ',', '.');
   } 
    
   public function incrementarSalario() : void{
        $this->salarioAnual+=$this->aumento*$this->salarioAnual/100;
    }
}
?>