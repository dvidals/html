<?php
declare(strict_types=1);

spl_autoload_register(function ($nombre_clase) {
    include_once $nombre_clase . '.php';
});

function print_error($mensaje) : void {
    echo "<br/>--- ERROR ---<br/> $mensaje <br/>--- ERROR ---<br/><br/>";
}

$samba = new Baile("SAMBA");
$samba5 = new Baile("SAMBA",5);
$hiphop = new Baile("HIP HOP");
$afro12 = new Baile("AFRO",12);
$afro11 = new Baile("AFRO",11);
$lambada15 = new Baile("LAMBADA",15);

Academia::addProfesores($profeA = new Profesor("ProfeA", "Varela Ferreiro", 696999999,'12345678A', 33));
$profeA->addBailes($samba, $hiphop, $afro12, $lambada15, $afro11);
$profeA->addClase($samba,3);
$profeA->addClase($hiphop,4);
try{
    $profeA->addClase($afro12, 5); // afro12 fue sustituido por afro11
} catch (BaileNoCapacitadoException $e) {
    print_error("Intentando añadir clases de un Baile que el profesor no puede impartir");
}

Academia::addProfesores(
    new Profesor("ProfeB", "Varela Ferreiro", 696999999, '12345678B', 50,
        array($samba, $hiphop, $afro12, $lambada15, $afro11),
        array("SAMBA" => 5)
        )
);


//var_dump(Academia::$arrayProfesores);
try {
    Academia::addProfesores($profeA = new Profesor("ProfeA", "Varela Ferreiro", 696999999,'12345678A', 34));
} catch (NifExistenteException $e) {
    print_error("Se ha intentado añadir un Profesor cuyo NIF ya está registrado: $profeA->nif");
}
Academia::addProfesores($profeC = new Profesor("ProfeC", "Varela Ferreiro", 696999999,'12345678C', 35));
Academia::addProfesores($profeD = new Profesor("ProfeD", "Varela Ferreiro", 696999999,'12345678D', 36));

$profeC->addBailes($samba, $hiphop, $hiphop, $afro11, $lambada15);
$profeC->removeBaileByName("HIP HOP");

$alum = new Alumno("Uxia", "Loureiro Agra", 696999999);
$alum->setNumClases(1);
Academia::addAlumnos($alum);

$alum = new Alumno("Manuel", "Abel Prado", 699666999);
$alum->setNumClases(4); // Probar a comentar
Academia::addAlumnos($alum);


echo Academia::printInfo();

try {
    $profeA->comparar($alum);
} catch (TypeError $e){
    print_error($e->getMessage());
}

function print_compara($profe1, $profe2) : void {
    $out = '<br/>' . $profe1->nome;
    try {
        switch ($profe1->comparar($profe2)) {
            case 1: $out .= ' é máis vello'; break;
            case -1: $out .= ' é máis xove'; break;
            case 1: $out .= ' ten a mesma idade'; break;
            default: throw new Exception("Valor inválido devuelto por método comparar");
        }
        $out .= ' que ' . $profe2->nome . '<br/>';
        echo $out;
    } catch (TypeError $e){
        print_error($e->getMessage());
    }
}

print_compara($profeA, $alum);
print_compara($profeA, $profeC);
print_compara($profeD, $profeC);

?>
