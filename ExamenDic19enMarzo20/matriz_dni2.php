
<html>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Introduce filas y columnas de la matriz:
        <input type="text" name="matriz" placeholder="8" min="2" max="40">
        <input type="submit" value="Pintar">
    </form>


<?php
error_reporting(E_ALL ^ E_NOTICE);

$matriz=$_POST['matriz'];

$matriz=str_replace(" ","",$matriz);

$matriz=explode(",",$matriz);


if (strlen($_POST['matriz'])==0){
    $n=8;
    $m=8;
}

elseif(count($matriz)>2) echo "La matriz sólo puede tener un máximo de 2 dimensiones";

elseif(count($matriz)>1 and ctype_digit($matriz[0]) and ctype_digit($matriz[1]) and intval($matriz[0])<100 and intval($matriz[1])<100){
$n=intval($matriz[0]);
$m=intval($matriz[1]);
}
elseif(count($matriz)==1 and ctype_digit($matriz[0])and intval($matriz[0])<100){
    $n=intval($matriz[0]);
    $m=intval($matriz[0]);
}
else echo "Sólo está permitido introducir números enteros menores que 100 separados por comas";

require 'funciones2.php';
$a=array();
$a= matriz($n,$m);

echo "<table>";
foreach ($a as $v){
    echo "<tr>";
    foreach ($v as $v2){
        echo "<td>";
       echo "$v2";
        echo "</td>";
        
    }
    
    echo "</tr>";
}
echo "</table>";

echo "<br><br><br>";
echo "<table>";
foreach ($a as $v){
    echo "<tr>";
    foreach ($v as $v2){
        echo "<td>";
        $v3=str_split($v2);
        $v4=array();
        for ($i=0;$i<8;$i++){
            $v4[$i]=$v3[$i];
        }
       if ($v2[8]=="A" or $v2[8]=="E"){
           for ($i=0;$i<8;$i++){
               $v2[$i]=max($v4);
           }
           $v2[8]=substr("TRWAGMYFPDXBNJZSQVHLCKE", $v2 % 23, 1);
           echo "<b>$v2</b>";
           
       }
       else echo "$v2";
        echo "</td>";
        
    }
    
    echo "</tr>";
}
echo "</table>";

?>

</body>
</html>
