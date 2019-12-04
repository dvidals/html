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

$bandera="true";
       


if($bcal==$b and $ccal=$c){
    echo "<h1> Número de cuenta correcto</h1>";
    
}
else echo "<h1> Número de cuenta incorrecto</h1>";

if($bandera){
    echo "<b>Información de la cuenta:</b><br/> <br/>";
    echo "Cuenta: ".$cuenta;
    echo "<br/>";
    echo "Bloque correspondiente a la sucursal: ".$a;
    echo "<br/>";
    echo "Dígito de control de la sucursal: ".$b;
    echo "<br/>";
    echo "Dígito de control del número de cuenta: ".$c;
    echo "<br/>";
    echo "Bloque correspondiente al número de cuenta: ". $d;
    echo "<br/>";
    echo "Suma ponderada para la entidad: ".$pa."<br/>";
    echo "Suma ponderada para el número de cuenta: ".$pd."<br/>";
    echo "Resto suma ponderada/11 para la entidad: ".($pa%11)."</br>";
    echo "Resto suma ponderada/11 para el número de cuenta: ".($pd%11)."</br>";
    echo "Resultado para la entidad: ".$ra."<br/>";
    echo "Resultado para el número de cuenta: ".$rd."<br/>";
    echo "Dígito de control de la entidad calculado por suma ponderada: ".$bcal;
    echo "</br>";
    echo "Dígito de control de la cuenta calculado por suma ponderada: ".$ccal;
    echo "</br>";
}
}
}
else echo "Debe introducir un número de cuenta";
?>
</body>
</html>
