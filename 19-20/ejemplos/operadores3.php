<HTML>
 <HEAD>
   <TITLE>Operadores</TITLE>
 </HEAD>
 <BODY>
   <CENTER>
     <H2>Operadores de asignación</H2>
     <?php
       define("euro",166.386);
       // en la variable $texto vamos a concatenar todo el texto a mostrar
       // por pantalla 
       $texto = "El valor de la constante 'euro' es: <B>";
       $texto .= euro;
       $texto .= "pts.</B><BR><BR>";
       $texto .= "1000€ son ";
       $valor = euro*1000;       //calculamos el valor de 1000€
       $texto .= $valor;
       $texto .= "pts<BR>";
       $texto .= "1000pts. son ";
       $valor =1000/euro;       //obtenemos el valor de 1000pts en €
       $valor *= 100;		//lo multiplicamos por 100 
       $valor = intval($valor); //eliminamos los decimales que no queremos
       $valor /= 100;           //lo dividimos por 100 para obtener el valor final
       $texto .= "€<BR><BR>";
       $texto .= "157€ son ";
       $valor = intval(157/50);
       $texto .= $valor ." billetes de 50€ y ". (157%50) ."€";
       echo $texto;
     ?>
   </CENTER>
 </BODY>
</HTML>
