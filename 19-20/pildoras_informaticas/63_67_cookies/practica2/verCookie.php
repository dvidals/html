<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>65: Práctica 1 cookies</title>

</head>
<body>
<?php
 
 if(!$_COOKIE["idioma"]) header("Location:pagina1.php");

 else  if($_COOKIE["idioma"]=="es") header("Location:spanish.php");

 else if ($_COOKIE["idioma"]=="en") header("Location:english.php");
 
 

?>

<br>
<br>
</body>
</html>
