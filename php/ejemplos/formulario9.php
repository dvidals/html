<?php
echo "Querido ".htmlspecialchars($_POST['nombre']);
echo htmlspecialchars($_POST['apellidos'])."<br>";
$notastring= htmlspecialchars ($_POST['nota']);
if (filter_var($notastring, FILTER_VALIDATE_FLOAT) === FALSE)
{
echo "Introduce un dato numérico";
}
 else {
    

       $nota=(integer)$notastring;
            switch($nota){
                case '0':;
                case '1':;
                case '2':;
                case '3':;
                case '4':echo "Su nota es Insuficiente";;
                break;
                case '5':;
                case '6': echo "Su nota es Suficiente";
                break;
                case '7':;
                case '8':;
                echo "Su nota es Notable";
                 break;
                case '9':;
                case '10':;
                echo "Su nota es Sobresaliente";
                 break;
                default:;
        echo "Esto no funciona";
                                    
 }
 
}

?>
