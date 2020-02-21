<?php
/*
1.3.7. Avaliación:
Queremos   xestionar   os   salarios   dos   nosos   empregados.   Para   elo,   temos   que   gardar
información tanto dos empregados asalariados como dos empregados que contratamos por horas.
 De ambos queremos saber o seu nome, apelidos e NSS. 
 Os empregados asalariados teñen ademais o importe que cobran anualmente, tendo en conta que todos teñen 14 pagas anuais.
 Os empregados por horas teñen un importe a cobrar por hora (por defecto 25 euros) e o número de horas que traballaron este mes.
Temos que declarar as seguintes clases:
-Dos empregados teremos un método que nos devolverá o nome completo do empregado.
-Ademais o empregado terá dous métodos abstractos salarioMes e incrementarSalario. 
    +O primeiro devolverá o que cobra un empregado ao mes, o cal se calculará dependendo do tipo de empregado de que se trate. 
    +O segundo incrementará o salario (o salario anual para os empregados asalariados e o importe hora para os contratados 
    por hora) na porcentaxe que se lle teña indicado no construtor. Esta porcentaxe pasarase cando se crea o empregado no
    construtor.
-Utiliza métodos máxicos para cargar as clases e para facer os set e get dos atributos.
-Crea unha interface Comparar cun método de nome comparar cun parámetro.
    +O empregado por horas ten un método comparar que recibe outro empregado e indicano caso de que o outro empregado 
    tamén sexa por horas, a diferenza de horas entre osdous empregados
    +O   método   comparar   comprobará   que   o   obxecto   recibido   é   de   tipo   empregado   por horas, 
    en caso contrario lanzará unha excepción indicándoo.
-Fai un exemplo onde se compare dous empregados utilizando o método comparar.Para probalo debes facer o seguinte:
    +Crea un array de empregados con dous empregados como mínimo de cada tipo.
    +A   continuación   debes   mostrar   a   información   seguinte   empregando   os   métodos creados. Por exemplo:
        
        En total temos 4 empregados.
        O empregado Ana Fouz Vila é un empregado asalariado que cobra 2.308,57 euroseste mes.
        O empregado Lois Gómez Vilariño é un empregado contratado por horas que cobra 700,00 euros este mes.
        O empregado Laura Martínez Vázquez é un empregado contratado por horas que cobra 765,00 euros este mes.
        O empregado Anita Pérez Vila é un empregado asalariado que cobra 2.071,43 euros este mes.
        Lois Gómez Vilariño traballou 2 horas menos que Laura Martínez Vázquez.
    */

    interface Comparar {
        public function comparar($parametro);
            
        
    }
    class CompararException extends Exception{};

   abstract class Empregado{
        protected $nome;
        protected $apelidos;
        protected $NSS;

        abstract function salarioMes();
        abstract function incrementarSalario();


        function __toString()
        {
            return "$this->nome $this->apelidos <br/>";
        }

        public function comparar(Empregado $empregado){
            if($empregado instanceof Empregado){   
            }  
            else throw new CompararException;   
            
        
    }


    }

    class Asalariados extends Empregado{

        protected $salario;
        protected $incremento;

        public function __construct($nome,$apelidos,$NSS,$salario,$incremento){
            parent::$nome;
            parent:: $apelidos;
            parent:: $NSS;
            $this->salario=$salario;
            $this->incremento=$incremento;
           
            
        }

        function salarioMes(){
            return $this->salario / 14;
            
        }
/*
        public function setNumClases( $numClases) {
            $this->numClases=$numClases;
        }
*/
        function incrementarSalario(){

            return $this->salario=$salario*()
        }

    }

    class PorHoras extends Empregado{

        protected $importe;
        protected $horas;
        protected $incremento;

        public function __construct($nome,$apelidos,$NSS,$importe=25,$horas,$incremento){
            parent::$nome;
            parent:: $apelidos;
            parent:: $NSS;
            $this->importe=$importe;
            $this->horas=$horas;
            $this->incremento=$incremento;
            
        }

        function salarioMes(){
            return $this->importe * $this->horas;
            
        }
        function incrementarSalario(){
            ;
        }

    }