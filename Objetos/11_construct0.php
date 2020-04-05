<?php
class Cadenas {
  private $str;
  
  function __get($prop){
      return $this->$prop;
      
  }
  function __construct($param) {
    if (gettype($param) != 'string')
      die("ERROR: parámetro NO válido ");
    else
      $this->str=$param;
  }
}
$obj=new Cadenas('hola');
echo $obj->str.'<br/>';
$obj=new Cadenas(7); // dará un error
echo $obj->str.'<br/>';
?>