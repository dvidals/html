<?php

/*
Tarefa 3. Uso de métodos máxicos.
Crear unha clase Articulo con dúas propiedades (id e nome) que non deben ser accesibles directamente dende o exterior.

1)Define un construtor que establece o valor das propiedades.
2)Cando   se   clone   un   obxecto   o   id   debe   incrementarse   en   1   con   respecto   ao   obxecto orixinal.
3)Utiliza métodos  máxicos  para establecer  e obter os valores  dos atributos  de xeito que sigan sendo válidos 
no caso de que engadísemos máis atributos á clase.
4) No caso  de que intentemos  amosar o obxecto  con echo  ou print debe  chamarse  a un 
método   de   nome  amosarArticulo  que   da   información   dos   valores   dos   atributos   da forma:
     1 – linterna

    */

     class Articulo{

        protected $id=0;
        protected $nome;


        public function __construct($id, $nome){
            $this->id = $id;
            $this->nome = $nome;
          }


          function __get($property){
            if(property_exists($this, $property)) {
                return $this->$property;
            }
            else echo 'llamada a propiedad inexistente ('.$property . ') 
              de la clase ' . __CLASS__;
          }
      
  
      function __set($atributo, $valor) {
  
          $this->$atributo = $valor;
  
      }

      public function __clone(){
        $this->nome = $this->nome . ' (cloned)';
        $this->id=++$this->id;
        //++$this->id; valdría así
      }

      public function amosarArticulo(){
        return "$this->id - $this->nome";


    }

      public function __toString()
      {
       return $this->amosarArticulo(); //esto es mío al principio sólo puse amosarArticulo(), me daba fallo porque necesita
       //el $this para que la reconozca; luego puse todo sin el return y no funcionaba porque tiene que devolver
       // un string y para eso necesita que haya un return, para que devuelva algo.
      }

      
  
  
    }


  $articulo1=new Articulo(1,"linterna");
  $articulo2= new Articulo(2,"navaja");
  $articulo3= new Articulo(3,"hacha");
  $articulo4= new Articulo(4,"mechero");

  $articulo5= clone $articulo4;
  $articulo2->precio=2.33;

 //$articulo5->características;
 echo $articulo2->amosarArticulo()."<br/>";
 echo $articulo4->amosarArticulo()."<br/>";
 echo $articulo5->amosarArticulo()."<br/>";
 echo $articulo1->precio??' precio no asignado'."<br/>";
 echo $articulo2->precio??' precio no asignado'."<br/>";
 echo "<br><br>";
 echo $articulo2."<br/>";
 echo $articulo4."<br/>";
 echo $articulo5."<br/>";
 
 
  