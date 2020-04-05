<?php         // se recomienda usar === en lugar de ==
   $bool = (boolean) 1;	// mismo valor pero
   $int = (integer) 1;	// distinto tipo  (tb vale cast (int))
   echo ($bool == $int)."<br>";  // devuelve 1
   echo ($bool === $int)."<br>";  // devuelve cadena vacía
   echo (int)($bool === $int);  // devuelve 0; sin cast, nada
?>

