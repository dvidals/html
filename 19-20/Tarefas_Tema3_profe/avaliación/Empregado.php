<?php

 abstract class Empregado {
   private string $nome;
   private string $apelido1;
   private string $apelido2;
   private string $NSS;
   protected int $aumento;

   public function __construct(/*string $tipo,*/ string  $nome, string $apelido1, string $apelido2,
                    string $NSS, int $aumento) {
      $this->nome=$nome;
      $this->apelido1=$apelido1;
      $this->apelido2=$apelido2;
      $this->NSS=$NSS;
      $this->aumento=$aumento;
   } 

   public function __set($atributo, $valor) {  
     if (property_exists(__CLASS__, $atributo)) {  
       $this->$atributo = $valor;  
     } else {  
       echo "Non existe o atributo $atributo.";  
     }  
   }  
   public function __get($atributo) {  
     if (property_exists(__CLASS__, $atributo)) {  
       return $this->$atributo;  
     }  
     return NULL;  
   }

   public function nomeCompleto() {
      return $this->nome .' '.  $this->apelido1.' '.  $this->apelido2;
   } 

   abstract public function salarioMes() : string;
   
   //abstract public function incrementarSalario() : void;

   public function __toString() : string {
     $out = '<p>O empregado ' . $this->nomeCompleto();
     if ($this instanceof EmpregadoAsalariado) {
        $out .= ' é un empregado asalariado que cobra ';
     }   
     else if ($this instanceof EmpregadoHoras) {
        $out .= ' é un empregado contratado por horas que cobra ';
     }
     $out .= $this->salarioMes().' euros este mes </p>';
     return $out;
   }
   
}
?>


