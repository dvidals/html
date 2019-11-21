<HTML>
 <HEAD>
   <TITLE>Operadores</TITLE>
 </HEAD>
 <BODY>
   <CENTER>
     <H2>Operador de ejecución</H2>

<?php

echo "time(): " . time() . "<BR>";
$semanaSiguiente = time() + (7 * 24 * 60 * 60);
// 7 días; 24 horas; 60 minutos; 60 segundos
echo 'Ahora:            ' . date('Y-m-d') . "\n";
echo "<BR>";
echo 'Semana Siguiente: ' . date('Y-m-d', $semanaSiguiente) . "\n";
echo "<BR>";
echo 'Semana Siguiente: ' . date('Y-m-d', strtotime('+1 week')) . "\n";

// https://www.w3schools.com/php/func_date_time.asp
// https://www.w3schools.com/php/php_date.asp

?>

   </CENTER>
 </BODY>
</HTML>
