<html>
    <body style="text-align:center ">
<?php

/*
 Igual que el programa anterior, pero esta vez la pirámide debe aparecer invertida, con el vértice hacia abajo.

 */
$p="**********";
        for($i=0;$i<9;$i++){
            $p=substr($p,0,-1);
            echo $p."<br>";
        }
?>
</body>
</html>