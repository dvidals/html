<?php
class Cadenas {
  private $str;
  function __construct($param) {
    if (gettype($param) != 'string')
      die("ERROR: parámetro NO válido ");
    else
      $this->str=$param;
  }
}
$obj=new Cadenas('hola');
$obj=new Cadenas(7);                    // dará un error
?>
