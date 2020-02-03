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
        setlocale(LC_ALL,'es_ES');
        date_default_timezone_set('Europe/Madrid');

        setlocale(LC_TIME, 'es_ES.UTF-8');
        setlocale(LC_TIME, 'spanish');
        class Data {
            private static $calendario = "Calendario gregoriano";
            public static function getData(){
                $ano = date('Y');
                $mes = date('F');
                $dia = date('d');
                $diasemana=date('w');
                return $diasemana. ' '.$dia.' de ' . $mes . ' do ' . $ano;
                
                
               } 

            
            public  function getCalendario(){
                return $this->calendario;

            }
            public static function getHora(){
                $hora=date('H');
                $minuto=date('i');
                $segundos=date('s');
                return $hora.':'.$minuto.':'.$segundos;

            }
            public function getDataHora(){
                return $this-> getData().' e son as '.$this->getHora();
                
            }
           } 
           
           $data=new Data();
           Echo 'Hoxe é '.$data->getDataHora();