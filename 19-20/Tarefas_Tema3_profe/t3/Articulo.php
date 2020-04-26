<?php
class Articulo {  
   private int $id;  
   private string $nome;  

   public function __construct(int $id, string $nome) {  
     $this->id = $id;  
     $this->nome = $nome;  
   }  

   public function __clone() {  
     ++$this->id;   
   }  

   public function __set($atributo, $valor) {
       $this->$atributo = $valor; 
   }  

   public function __get($atributo) {  
     if (property_exists(__CLASS__, $atributo)) {  
       return $this->$atributo;  
     }  
     return NULL;  
   }

   public function __toString(){  
     return $this->amosarArticulo(); 
     
   }

   public function amosarArticulo () {
       return $this->id.' - '.$this->nome;
   }
}


