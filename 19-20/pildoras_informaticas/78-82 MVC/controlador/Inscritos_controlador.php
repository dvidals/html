<?php 

require_once("modelo/Inscritos_modelo.php");

$inscrito= new Inscritos_modelo(); //hemos llamado al constructor de Inscritos_modelos, hemos instanciado la clase

$matrizInscritos=$inscrito->get_inscritos(); //ya tengo de esta forma un array con todos los inscritos en la variable $matrizInscritos

require_once("vista/Inscritos_view.php");


?>