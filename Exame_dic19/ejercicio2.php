<html>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h2>Introduce tú número de cuenta (20 dítitos):</h2>
        <input type="text" name="cuenta"  >
        <input type="submit" value="enviar">
    </form>

<?php
//$cuenta="2080 5077 97 3000204830";
if(!empty($_POST['cuenta'])){
$cuenta=$_POST['cuenta'];
$cuenta=trim($cuenta);
$cuenta=str_replace(" ","",$cuenta);
if(strlen($cuenta)<>20 and strlen($cuenta)>=1)echo "Error: No es un número de cuenta válido, debe de tener 20 dígitos";
else{
    function codigo_cuenta_correcto($cuenta): bool{   
$a=substr($cuenta,0,8);
$b=substr($cuenta,8,1);
$c=substr($cuenta,9,1);
$d=substr($cuenta,-10);
$pesos_entid_sucursal=array(4,8,5,10,9,7,3,6);
$pesos_num_cuenta=array(1,2,4,8,5,10,9,7,3,6);
$pd=0;
$pa=0;


for($i=0;$i<strlen($d);$i++){
    $pd= (intval($d[$i])* intval($pesos_num_cuenta[$i]))+$pd;
}
for($i=0;$i<strlen($a);$i++){
    $pa=intval($a[$i])*intval($pesos_entid_sucursal[$i])+$pa;
}
$ra=11-($pa%11);
$rd=11-($pd%11);
$bcal="";
$ccal="";
if ($ra==11) $bcal=0;
elseif($ra==10)$bcal=1;
else $bcal=$ra;

if ($rd==11) $ccal=0;
elseif($rd==10)$ccal=1;
else $ccal=$rd;

$bandera=true;
       


if($bcal==$b and $ccal=$c) return true;
    

else return false;
}


}
}
else echo "Debe introducir un número de cuenta";

var_dump( codigo_cuenta_correcto($cuenta));
?>
</body>
</html>