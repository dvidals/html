<?php 
  
class Forma { 
    // Sobrecarga (overload) en PHP
    function __call($metodo, $parametros) {
        if($metodo == 'area') { 
            switch (count($parametros)) { 
                case 1: // con solo un argumento: area del circulo
                    return 3.14 * $parametros[0]; 
                case 2:  // dos argumentos: area cuadrado
                    return $parametros[0]*$parametros[1]; 
            } 
        } else if($metodo == 'metodo1') { 
            $this->metodo1();
        }
        else echo "llamada a función no definida $metodo<br/>";  
    } 

    private function metodo1(){
        echo "metodo1. todo bien <br/>";
    }
} 
      
$s = new Forma; 
$s->metodo1();
echo($s->area(2)); echo '<br/>'; 
//echo(Forma::area(2)); echo '<br/>'; // para probar callStatic
echo ($s->area(4, 2));