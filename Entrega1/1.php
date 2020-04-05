<?php
/*Escribe un script para resolver ecuaciones de segundo grado, ax2+bx+c=0. 
Si la ecuación no tiene soluciones reales, hay que mostar un error.
*/

// x=(-b+- raiz de b al cuadrado -4ac)/2a;
if (isset($_POST['enviar'])){  //comprobamos que se ha enviado algún valor
  if(empty($_POST['a']) ){     // comprabamos que la ecuación es de 2º grado (sólo lo es cuando a es un número distinto de cero)
     echo "El coeficiente a debe existir y tiene que ser distinto de 0. <a href='1.html' title='Volver'>Volver</a>";
     
  }else{

$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$bandera=true; //cambiará a false cuando la solución no sea real (raíz negativa)
//echo $a;
//echo $b;
//echo $c;

if ($b<>0 or $c<>0){ //comprobamos los casos en que alguno de los otros 2 coeficientes no toma valor cero
If ($b<>0 and $c<>0){
    if ((($b*$b)-4*$a*$c)<0){
       echo "ERROR: No tiene solución real";
       $bandera=false;
    }
    else{
    $x1= round((-$b+sqrt(($b*$b)-4*$a*$c))/2*$a,5,PHP_ROUND_HALF_UP);
    $x2= round((-$b-sqrt(($b*$b)-4*$a*$c))/2*$a,5,PHP_ROUND_HALF_UP);
    }
}

If ($b==0 and $c<>0){ 
    if (($c/$a)>0){
        echo "ERROR: No tiene solución real";
        $bandera=false;
    }
    else{
    $x1=round(sqrt((-$c)/$a),5,PHP_ROUND_HALF_UP);
    $x2=round(-sqrt((-$c)/$a),5,PHP_ROUND_HALF_UP);
    }
            
}

If ($b<>0 and $c==0){
    $x1=0;
    $x2=round(-$b/$a,5,PHP_ROUND_HALF_UP);
}
if($bandera) echo "Las soluciones son $x1 y $x2";
}
else { //cuando los otros 2 coeficients son cero
If ($b==0 and $c==0) $x1=0;
  echo "La solución es $x1";  
}   
    

  }

}else
    echo "<a href='1.html' title='Volver'>Volver</a>";
    



?>