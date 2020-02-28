<?php
/*Modifica a clase Data, para que a propiedade calendario non sexa accesible dende o exterior da clase.
 Debes engadir os seguintes métodos estáticos:
 getCalendario: que devolverá o valor desta propiedade
 getHora: que devolvera a hora co seguinte formato HH:MM:SS
 getDataHora: que chamará aos métodos getData e getHora para amosar tanto a data comoa hora.
 A saída que debe amosar é a seguinte:
 Usamos o calendario: Calendario gregoriano
 Hoxe é Venres 15 de Febreiro do 2014 e son as 09:48:31
 A clase da que partimos é a que se amosa a continuación, e deberemos facer un exemplo do seu uso chamando aos métodos getCalendario e getDataHora.
 class Data {
     public static $calendario = "Calendario gregoriano";
     public static function getData(){
         $ano = date('Y');
         $mes = date('m');
         $dia = date('d');
         return $dia . '/' . $mes . '/' . $ano;
        }
     } 

     class Data {
         public static $calendario = "Calendario gregoriano";
         public static function getData(){
             $ano = date('Y');
             $mes = date('m');
             $dia = date('d');
             return $dia . '/' . $mes . '/' . $ano;
            } 
        } 
        Co cal para amosar a propiedade deberiamos empregar o nome da clase:
        echo Data::$calendario;
        E para chamar ao método non necesitaríamos crear un obxecto da clase:
        echo Data::getData();
        */

        //private onst dias=array("Domingo","Luns","Martes","Mércores","Xoves","Venres","Sábado");
        //private const meses = array ("Xaneiro,...);
        // setlocale(LC Time, 'es_ES.UTF-8');
        // return (strftime("%A %e de %B do %Y"));
        class Data {
            private static $calendario = "Calendario gregoriano";
            public static function getData(){

                //return self::dias[date('W')]." ". date('d'). " de ". self::meses[date('n')-1]. "do".date('Y');
                $ano = date('Y');
                $mes = date('m');
                $dia = date('d');
                $diasemana=date('w');
               switch($diasemana){
                    case 1:$diasemana="Luns";break;
                    case 2:$diasemana="Martes";break;
                    case 3:$diasemana="Mércores";break;
                    case 4:$diasemana="Xoves";break;
                    case 5:$diasemana="Venres";break;
                    case 6:$diasemana="Sábado";break;
                    case 7:$diasemana="Domingo";break;   
                }
                
                switch($mes){
                    case 1:$mes="Xaneiro";break;
                    case 2:$mes="Febreiro";break;
                    case 3:$mes="Marzo";break;
                    case 4:$mes="Abril";break;
                    case 5:$mes="Maio";break;
                    case 6:$mes="Xuño";break;
                    case 7:$mes="Xulio";break;   
                    case 8:$mes="Agosto";break;   
                    case 9:$mes="Setembro";break;   
                    case 10:$mes="Outubro";break;   
                    case 11:$mes="Novembro";break;   
                    case 12:$mes="Decembro";break;   
                }
                return $diasemana. ' '.$dia.' de ' . $mes . ' do ' . $ano;
                // setlocale(LC Time, 'es_ES.UTF-8');
                // return (strftime("%A %e de %B do %Y"));
                
               } 

            
            public  function getCalendario(){
                return self::$calendario;

            }
            public static function getHora(){
                $hora=date('H');
                $minuto=date('i');
                $segundos=date('s');
                return $hora.':'.$minuto.':'.$segundos;
                // return strftime("%H:%M:%S");
                // return date('H:i:s');

            }
            public function getDataHora(){
                return $this-> getData().' e son as '.$this->getHora();
                
            }
           } 
           
           $data=new Data();
           Echo 'Usamos o calendario: '.Data::getCalendario().'<br/>';
           Echo 'Hoxe é '.$data->getDataHora();
