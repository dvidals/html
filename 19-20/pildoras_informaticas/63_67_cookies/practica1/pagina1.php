<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>65: Práctica 1 cookies</title>

</head>
<body>
<?php
if(isset($_COOKIE["idioma"])) {

    if($_COOKIE["idioma"]=="es") header("Location:spanish.php");

    else if ($_COOKIE["idioma"]=="en") header("Location:english.php");
}

?>
<table width="25%" align="center">
<tr>
<td colspan="2" align="center"><h1>Elige idioma</h1></td>
</tr>
<tr>
<td align="center"><a href="creaCookie.php?idioma=es"><img src="img/esp.gif" width="90" height="60"></a></td>
<td align="center"><a href="creaCookie.php?idioma=en"><img src="img/ing.gif" width="90" height="60"></a></td>
</tr>
</table>
<br>
<br>
</body>
</html>
