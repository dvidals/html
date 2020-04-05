<?php
   interface Machine {
      public function calcTask();
   }
   class Circle implements Machine {
      private $radius;
      public function __construct($radius){
         $this -> radius = $radius;
      }
      public function calcTask(){
         return $this -> radius * $this -> radius * pi();
      }
   }
   class Rectangle implements Machine {
      private $width;
      private $height;
      public function __construct($width, $height){
         $this -> width = $width;
         $this -> height = $height;
      }
      public function calcTask(){
         return $this -> width * $this -> height;
      }
   }
   $mycirc = new Circle(3);
   $myrect = new Rectangle(3,4);
   echo $mycirc->calcTask(); echo '<br/>';
   echo $myrect->calcTask(); echo '<br/>';

   //Clase abstracta: aquella que no se puede instanciar. Dos ejemplos de uso (explicar: el primero sería en Java, para métodos que no se usan en objetos, la otra sería
   //cuando sólo queremos que se hereden, no se puede crear un objeto de esa clase.

   //Interface:
   // Sirve para definir como va a ser la comunicación entre clases. La comunicación entre clases se hace con Métodos.
   //Importante: en la interface sólo está la cabecera del método, no está implementado (es abstracto), se implementa en cada clase.
?>
