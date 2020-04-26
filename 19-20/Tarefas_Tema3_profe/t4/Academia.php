<?php
require_once 'Profesor.php';  
require_once 'Alumno.php';  
class Academia {
   const NOME="ESCOLA DE BAILE MOVEM"; 
   function engadirProfesor($nom, $ape, $mobil,$nif) {
       $p =new Profesor($nom, $ape, $mobil, $nif);
       return $p;
   }
   function engadirAlumno($nom, $ape, $mobil) {
       $a=new Alumno($nom, $ape, $mobil);
       return $a;
   }
}
?>

