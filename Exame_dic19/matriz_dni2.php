
<html>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Introduce filas y columnas de la matriz:
        <input type="text" name="matriz" placeholder="8" min="2" max="40">
        <input type="submit" value="Pintar">
    </form>


<?php
error_reporting(E_ALL ^ E_NOTICE);
$matriz=explode(",",str_replace(" ","",$_POST['matriz']));
if (strlen($_POST['matriz'])==0){
    $n=8;
    $m=8;
}
 elseif(!ctype_digit($matriz[0])|| (!empty($matriz[1]) && !ctype_digit($matriz[1])) )echo "Sólo se pueden escribir números enteros y comas para separar filas de columnas. Los números reales, letras y otros caracteres están prohibidos";
 elseif  ($_POST['matriz']==0  || (count($matriz))>=3 ) 
     echo "Hay que introducir 1 número mayor que cero para matrices cuadradas  ó  2 números mayores que cero separados por comas".
        " para matrices no cuadradas";  
 
 elseif ($matriz[0]>=100 || $matriz[1]>=100) echo "No se pueden escribir matrices de 100 o más filas o columnas para no colapsar la memoria del servidor";
 
elseif($matriz[1]==''){  
    $n=$_POST['matriz'];
    $m=$_POST['matriz'];
}
else{
$n=$matriz[0];
$m=$matriz[1];
}
$a=array();
//$a=array(2,3);
require 'funciones2.php';
$dni=CrearDNI();
$a=CrearMatriz($n,$m);
echo "<table>";
 foreach ($a as $v){
      echo"<tr>";
     foreach ($v as $v2){
         echo"<td>";
         echo "$v2";
         echo"</td>";
     }
     echo"</tr>";
 }
 echo "</table>";
 
 echo "<br/><br/>";
 

 /*echo "<table>";
  foreach ($a as $v1){
      echo"<tr>";
     foreach ($v1 as $v2){
         echo"<td>";
         if (in_array(substr("TRWAGMYFPDXBNJZSQVHLCKE", (substr($v2,0,-1)) % 23, 1),['A','E'])){
            //echo "<b>". DNIcondicion($v2)."</b>";
           
         }
         else echo "$v2";
         echo"</td>";
     }
     echo"</tr>";
 }
 echo "</table>";
 
 echo "<br/><br/>";
 
 */
 /*
 $a=  CrearMatrizCondicion($n, $m);
 echo "<table>";
 foreach ($a as $v){
      echo"<tr>";
     foreach ($v as $v2){
         echo"<td>";
         echo "$v2";
         echo"</td>";
     }
     echo"</tr>";
 }
 echo "</table>";
 
 echo "<br/><br/>";
  
  */

  foreach ($a as $v1){
      
     foreach ($v1 as $v2){
        
         if (in_array(substr("TRWAGMYFPDXBNJZSQVHLCKE", (substr($v2,0,-1)) % 23, 1),['A','E'])){
            //$v2vocal[]= DNIcondicion($v2);
            //unset($v2);
             echo key($a);
           
         }
       else  echo "-";
     }
     echo "</br>";
 }

 

 ?>
 </body>
 </html>