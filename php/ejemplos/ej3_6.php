<?php
$anho = 2008;
// bisiestos: divisibles por 400 o por 4 pero no por 100
if (($anho % 400 == 0) || 
       (($anho % 100 != 0) && ($anho % 4 == 0))) {
	echo "$anho es bisiesto";
} else echo "$anho no es bisiesto";
?>
