<?php

class Cronometro {

    private $nacimiento;
    private $muerte;

    function __construct() {
        $this->nacimiento = $this->dame_instante();
    }

    function __destruct() {
        $muerte = $this->dame_instante();
        $tiempo_total = round(((float) $muerte - (float) $this->nacimiento), 9);
        echo "La p&aacute;gina ha tardado en cargarse:  $tiempo_total segundos";
    }

    private function dame_instante() {
        $instante_actual = microtime(); //devuelve el tiempo que tarde en ejecutarse en microsegundos.
        list($micro_seg, $segs) = explode(" ", $instante_actual);
        var_dump($micro_seg);
        var_dump($segs);
        return ((float) $micro_seg + (float) $segs);
    }

}

$reloj_en_marcha = new Cronometro();
// resto de la página
// al finalizar el script desaparecerá el objeto y se ejecutará el destructor
?>

