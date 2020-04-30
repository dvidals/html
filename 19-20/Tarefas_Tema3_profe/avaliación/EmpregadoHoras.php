<?php

class EmpregadoHoras extends Empregado implements Comparar{
   private int $horas;
   private float $importeHora=25;
   
   public function __construct(string  $nome, string $apelido1, string $apelido2,
            string $NSS, int $aumento, int $horas, int $importeHora=25) {
       parent::__construct($nome, $apelido1, $apelido2, $NSS,$aumento);
       $this->horas=$horas;
       $this->importeHora=$importeHora;
   }

   public function establecerHoras(int $horas) : void {
       $this->horas=$horas;
   }
    
   public function salarioMes() : string{
      $this->incrementarSalario();  
      return number_format($this->horas*$this->importeHora, 2, ',', '.');
   } 

    public function incrementarSalario() : void {
        $this->importeHora+=$this->aumento/100*$this->importeHora;
    }

    function print_compara(Empregado $emp) : void {
        if (($dif = $this->comparar($emp)) > 0) {
            echo '<br/>' . $this->nome . ' traballou '.$dif.' horas máis que ' . $emp->nome . '<br/>';
        } elseif ($dif<0) {
            echo '<br/>' . $emp->nome . ' traballou '. -$dif . ' horas máis que ' . $this->nome . '<br/>';
        } else {            
            echo '<br/>' . $this->nome . ' traballou as mesmas horas que ' . $emp->nome . '<br/>';
        }

        

    }
    
    /**
     * @return int diferencia de horas trabajadas. Devuelve negativo si el empleado pasado
     * por parámetro trabajó más horas que el que llama al método
     */
    public function comparar(Empregado $emp) : int {
        if ($emp instanceof EmpregadoHoras) return $this->horas-$emp->horas;
        else throw new TypeError("EmpregadoHoras::comparar debe recibir otro EmpregadoHoras");
    }

    public function getImporte(){
        return $this->importeHora;
    }

}
?>

