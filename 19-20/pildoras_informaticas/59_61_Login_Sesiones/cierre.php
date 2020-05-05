<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>59 Login</title>

</head>
<body>
<?php

    session_start();
    session_destroy();
    header("location:Login.php");

?>


</body>
</html>
