<?php
/*Extraia o nome de usuario dunha conta de correo electrónico
Exemplo de entrada : 'jose@exemplo.gal' --> Exemplo de saída : 'jose'*/
$cuenta='jose@exemplo.gal';
echo strstr($cuenta,'@',true);

?>