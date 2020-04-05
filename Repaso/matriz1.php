<?php
$a=array(1,3,5,7,9);
print_r($a);
echo"<br/>";
foreach($a as $c=>$v){
    unset ($a[$c]);
}
print_r($a);
$a[]=11;
echo"<br/>";
print_r($a);
echo"<br/>";
$a=array_values($a);
print_r($a);
$a[]=13;
echo"<br/>";
print_r($a);

 
?>
