<?php
/*Crea una función para resolver la ecuación de segundo grado. Esta función recibe los 
 * coeficientes de la ecuación y devuelve un array con las soluciones. Si no hay soluciones reales, devuelve FALSE.
*/


function SegundoGrado(){
if (isset($_POST['enviar'])){  //comprobamos que se ha enviado algún valor
  if(empty($_POST['a']) ){     // comprabamos que la ecuación es de 2º grado (sólo lo es cuando a es un número distinto de cero)
     echo "El coeficiente a debe existir y tiene que ser distinto de 0. <a href='2.html' title='Volver'>Volver</a>";
     
  }else{

$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$bandera=true; //cambiará a false cuando la solución no sea real (raíz negativa)
$soluciones=array();
//echo $a;
//echo $b;
//echo $c;


If ($b<>0 and $c<>0){
    if ((($b*$b)-4*$a*$c)<0)  $bandera=false;
    else{
    $soluciones[0]= round((-$b+sqrt(($b*$b)-4*$a*$c))/2*$a,5,PHP_ROUND_HALF_UP);
    $soluciones[1]= round((-$b-sqrt(($b*$b)-4*$a*$c))/2*$a,5,PHP_ROUND_HALF_UP);
   
    }
}

If ($b==0 and $c<>0){ 
    if (($c/$a)>0)  $bandera=false; 
    else{
    $soluciones[0]=round(sqrt((-$c)/$a),5,PHP_ROUND_HALF_UP);
    $soluciones[1]=round(-sqrt((-$c)/$a),5,PHP_ROUND_HALF_UP);
    }
            
}

If ($b<>0 and $c==0){
    $soluciones[0]=0;
    $soluciones[1]=round(-$b/$a,5,PHP_ROUND_HALF_UP);
}
 
If ($b==0 and $c==0) $soluciones[0]=0;
  
  }
  
  if($bandera) echo var_dump($soluciones);
  else echo var_dump($bandera);

}else
    echo "<a href='2.html' title='Volver'>Volver</a>";
    

}

echo SegundoGrado();

?>