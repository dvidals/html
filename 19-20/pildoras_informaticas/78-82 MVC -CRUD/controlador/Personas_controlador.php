<?php 

require_once("modelo/Personas_modelo.php");


$persona= new Personas_modelo(); //hemos llamado al constructor de Inscritos_modelos, hemos instanciado la clase

$matrizPersonas=$persona->get_personas(); //ya tengo de esta forma un array con todos los inscritos en la variable $matrizInscritos

require_once("vista/Personas_view.php");

//require_once("modelo/editar.php");
//require_once("modelo/borrar.php");


?>