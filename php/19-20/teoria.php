<?php

/*
 
 */
$a=array(10,20,30,40);
print_r($a);
echo "</br>";
$a[]=5;
print_r($a);
echo "</br>";
$a[10]=6;
$a[]=5;
print_r($a);
echo "<br>";
function dividir ($a,$b){
    if ($b==0){
        throw new Exception ('El segundo argumento es 0');
    }
    return $a/$b;
}
try {
    $resul1=dividir(5,0);
    echo "Resul 1: $resul1"."<br>";
}catch (Exception $e){
    echo "Excepción: ". $e->getMessage(). "<br>";    
}finally {
    echo "Primer Finally <br>";
}
try{
    $resul2=dividir(5,2);
    echo "Resul 2: $resul2"."<br>";
}catch (Exception $e){
    echo "Excepción: ". $e->getMessage(). "<br>";
}finally {
    echo "Segundo finally";
}
?>
