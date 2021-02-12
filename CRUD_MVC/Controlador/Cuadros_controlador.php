<?php
//Llamada al modelo

require_once ("Modelo/Cuadros_modelo.php");
$cuadro=new Cuadros_modelo();
$matrizCuadros=$cuadro->get_cuadros();

//Llamada a la vista

require_once ("Vista/Cuadros_view.php");

?>