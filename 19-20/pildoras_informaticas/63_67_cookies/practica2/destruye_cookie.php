<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>66 Cookies</title>

</head>
<body>
<?php


    setcookie("nombre_usuario", "juan",time()-1,); 
    
    //Se destruye la cookie poniendo un tiempo inferior al anterior.
    echo "Cookie destruida";


?>

</body>
</html>
