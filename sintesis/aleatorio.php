<!DOCTYPE html>
 <html>
   <head>
      <title>Número aleatorio</title>
   </head>
   <body>
   <?php
       echo rand(0, 100);
       echo "<br>";
       echo mt_rand(0, 100); // Mejor. Solventa problemas con rand
  ?>
  </body>
</html>
