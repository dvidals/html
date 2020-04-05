<?php
/*Crear un script que acepte un array de valores que contendrá
las notas de una clase con valores entre 1 y 10 y que calcule la media
e indique el número de estudiantes suspensos y con sobresaliente.
En el formulario, la lista de nombres se introducirá en un campo de texto,
con las notas separadas por espacios en blanco. 
Consultar el uso de las funciones floatval y isset.*/
if (isset($_POST['Enviar'])){
  if(empty($_POST['notas'])){
     echo "El campo notas est&aacute; vac&iacute;o. <a href='15_formulario.html' title='Volver'>Volver</a>";
  }else{
     $datos = $_POST['notas'];
     $arrayDatos = explode(" ", $datos);
     //reemplazamos las , por .
     $arrayDatos= str_replace(",",".",$arrayDatos);       
     $longitud = count($arrayDatos);
     $suspensos=0;
     $aprobados=0;
     $sobresalientes=0;
     $Media=0; $errores=0;
           
//*******************************
//comprobamos que los numeros introducidos sean entre 1 y 10
//comprobación de aprobados y suspensos
//*******************************
//Mostramos todas las notas del array
     for ($i=0; $i<=$longitud-1; $i++){
        if ($arrayDatos[$i]>=1 && $arrayDatos[$i]<=10){
            echo "Nota ".($i+1).": ".floatval($arrayDatos[$i])."<br>";
            if ($arrayDatos[$i]>=9){
               $sobresalientes++;
            }else{
               if ($arrayDatos[$i]>=5){
                 $aprobados++;
               }else{
                 $suspensos++;
               }
               }
       }else{
         echo "ERROR en la nota con valor ".$arrayDatos[$i].". Los valores tienen que estar entre 1 y 10. <br>";
         $errores++;
 
       }
                 
    }
echo "<hr>";
echo "Hay ".intval($sobresalientes)." sobresalientes.<br>";
echo "Hay ".intval($aprobados)." aprobados.<br>";
echo "Hay ".intval($suspensos)." suspensos.<br>";  
 
echo $errores." notas no v&aacute;lidas";
          
//*******************************
//se calcula la media
   for ($i=0; $i<=$longitud-1; $i++){
       if ($arrayDatos[$i]>=1 && $arrayDatos[$i]<=10){
          $Media=$Media+$arrayDatos[$i];
       }
   }
   $logintudmedia=intval($sobresalientes+$aprobados+$suspensos);
   $mediatotal=  $Media/$logintudmedia;  
   echo "<hr>";
   echo "La media de todas las notas es: ".floatval(number_format($mediatotal,2))."<br>";
//*******************************
//botón volver
   echo "<a href='15_formulario.html' title='Volver'>Volver</a>";
           
  }                
}else
    echo "<a href='15_formulario.html' title='Volver'>Volver</a>";
    
?>    
