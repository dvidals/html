<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>65: Práctica 1 cookies</title>

</head>
<body>
<?php

setcookie("idioma",$_GET["idioma"],time()+86400);
header("Location:verCookie.php");


?>

</body>
</html>
