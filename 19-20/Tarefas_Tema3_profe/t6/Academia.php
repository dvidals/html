<?php
require_once 'Profesor.php';  
require_once 'Alumno.php';  
class Academia {
   const NOME="ESCOLA DE BAILE MOVEM"; 

   function engadirAlumno($nom, $ape, $mobil) {
       $a=new Alumno($nom, $ape, $mobil);
       return $a;
   }
   function engadirProfesor($nom, $ape, $mobil,$nif,$idade) {
       $p =new Profesor($nom, $ape, $mobil, $nif,$idade);
       return $p;
   }

}
?>

