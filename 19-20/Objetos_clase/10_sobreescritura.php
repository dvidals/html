<?php 
  
class Padre {
    function jibiri() { 
        echo 'Padre<br/>'; 
    } 
} 

class Hija extends Padre { 
    function jibiri() { 
        echo 'Hija<br/>'; 
    } 
} 

$padre = new Padre;
$hija= new Hija;  
$padre->jibiri(); 
$hija->jibiri();