<?php
if (isset($_POST['enviar'])) {
    if (!empty($_POST['cuenta'])){
        
        if (strlen(str_replace(" ","",$_POST['cuenta']))<>20) echo "Error: Todos los números de cuenta tienen que tener 20 cifras";
         else{

function codigo_cuenta_correcto($cuenta):bool{
    $cuenta=str_replace(" ","",$_POST['cuenta']);
    $a=substr($cuenta,0,8);
    $b=substr($cuenta,8,1);
    $c=substr($cuenta,9,1);
    $d=substr($cuenta,-10);
    $suma1=0;
    $suma2=0;
    $pesos_entid_sucursal=array(4,8,5,10,9,7,3,6);
    $pesos_num_cuenta=array(1,2,4,8,5,10,9,7,3,6);
    for ($i=0;$i<8;$i++){
        $suma1= $suma1+$pesos_entid_sucursal[$i]*$a[$i];
    }
    for ($i=0;$i<10;$i++){
        $suma2= $suma2+$pesos_num_cuenta[$i]*$d[$i];
    }
    

   $resto1=$suma1%11;
   $resto2=$suma2%11;
   $resultado1=11-$resto1;
   $resultado2=11-$resto2;
   $br="";
   $cr="";

   if($resultado1==11)$br=0;
   elseif($resultado1==10)$br=1;
   else $br=$resultado1;

   if($resultado2==11)$cr=0;
   elseif($resultado2==10)$cr=1;
   else $cr=$resultado2;
   
   if($b<>$br || $c<>$cr)return false;
   else return true;

}
$prueba=20805801101234567891;
var_dump(codigo_cuenta_correcto($prueba));
}
    }else echo "Introduzca un número de cuenta";
}else echo "Introduzca un número de cuenta";