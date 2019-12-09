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
 elseif  ($_POST['matriz']==0 || !is_numeric($_POST['matriz'][0]) || (count($matriz))>=3) 
     echo "Hay que introducir 1 número mayor que cero para matrices cuadradas  ó números mayores que cero separados por comas".
        " para matrices no cuadradas";  
 
elseif(strlen($_POST['matriz'])==1){  //esto no es bueno porque no me escribe matrices cuadradas de más de un número
    $n=$_POST['matriz'];
    $m=$_POST['matriz'];
}
else{
$n=$matriz[0];
$m=$matriz[1];
}
$a=array();
//$a=array(2,3);

require 'funciones.php';


$dni=CrearDNI();



$a=CrearMatriz($n,$m);
$vocales=array("A","E","I","O","U");
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
 
 //Hago 2 pasos intermedios para ir viéndolo pasito a pasito, poner en negrita primero los registros que acaban en vocal
 // y luego esos registros cambiando sus números por el máximo, pero manteniendo la vocal final
 
 /* 
 echo "<table>";
  foreach ($a as $v1){
      echo"<tr>";
     foreach ($v1 as $v2){
         echo"<td>";
         if(in_array(substr($v2,-1),$vocales)) echo "<b>".$v2."</b>";
         else echo "$v2";
         echo"</td>";
     }
     echo"</tr>";
 }
 echo "</table>";
 
 echo "<br/><br/>";
 
 echo "<table>";
  foreach ($a as $v1){
      echo"<tr>";
     foreach ($v1 as $v2){
         echo"<td>";
         if(in_array(substr($v2,-1),$vocales)){
             $n=substr($v2,0,8);
             $v3=str_split($n);
             for($i=0;$i<strlen($v2)-1;$i++){
                 $v2[$i]=max($v3);
             }
                 
                 echo "<b>".$v2."</b>";
         }
         else echo "$v2";
         echo"</td>";
     }
     echo"</tr>";
 }
 echo "</table>";
 echo "<br/><br/>";
  
  */
 echo "<table>";
  foreach ($a as $v1){
      echo"<tr>";
     foreach ($v1 as $v2){
         echo"<td>";
         if(in_array(substr($v2,-1),$vocales)){
             $n=substr($v2,0,8);
             $v3=str_split($n);
             for($i=0;$i<strlen($v2)-1;$i++){
                 $v2[$i]=max($v3);
             }
                 $v2[strlen($v2)-1]=substr("TRWAGMYFPDXBNJZSQVHLCKE", $v2 % 23, 1);
                 echo "<b>".$v2."</b>";
         }
         else echo "$v2";
         echo"</td>";
     }
     echo"</tr>";
 }
 echo "</table>";
 
 echo "<br/><br/>";


 ?>
 </body>
 </html>
 