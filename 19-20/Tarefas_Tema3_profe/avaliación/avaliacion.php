<?php
declare(strict_types=1);

spl_autoload_register(function ($nombre_clase) {
    include_once $nombre_clase . '.php';
});

    $empregados[]=new EmpregadoAsalariado('Ana','Fouz','Vila','123-452',1 ,32000);
    $empregados[]=new EmpregadoHoras('Lois','Gómez','Vilariño','121-444',0,28);
    $empregados[]=new EmpregadoHoras('Laura','Martínez','Vázquez','549-479',2,30);
    $empregados[]=new EmpregadoAsalariado('Anita','Pérez','Vila','121-213',0,29000);

    
    echo 'En total temos '.count($empregados).' empregados</br>';
   
    foreach ($empregados as $empregado) {
        echo $empregado;
    }
     
    $empregados[1]->print_compara($empregados[2]);   
    try {
        $empregados[2]->print_compara($empregados[3]);
    } catch (TypeError $e){
       echo $e->getMessage();
    }

    
?>