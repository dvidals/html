//jQuery(document).on('ready', function(){});
//$(document).on('ready', function(){});
//$(document).ready(funtion(){}); son todas las formas lo mismo, pero
// fueron evolucionando para escribir menos, filosofía wldm (write less do more)
// la filosofía de jquery es redefinir javascript para escribir menos 
// (como sucedía con los prototype)
// Se creo una clase miboton para luego referirse a ella.El botón al que le
// den click manda una alerta.this se refiere al objeto que provoca la llamada
// a la funcion
// con el método data puedo coger el valor de cualquier dato.
// definimos la variables boton e indice
$(function(){
	$('.miboton').click(funtion(){
		var boton = $(this).data('panelid'),//obtenemos p1,p2,p3 o p4 en función de a que botón pulsemos
			indice = boton.slice(-1);
			alert(indice);//obtenemos sólo el número del botón, nos desprendimos del p
//con todo lo anterior lo que hacemos es que dependiendo del botón que se pulse
//sacamos la información numérica de que botón se ha pulsado (1,2,3 o 4)
		//var boton = $(this).attr('class'),//obtendríamos los atributos de la clase
		//alert(boton);	//attr es un método de jQuery para obtener los atributos	
			xBoton= '#'+boton;
			$(xBoton+' .panel-body').html($(this).html());
		switch (indice) {
			case '1':
				$(xBoton).toggle();
				break;
			case '2':
				if ($(xBoton).css('display')=='none'){ //css es un método que muestra como está el css de lo que meto entre paréntesis
					$(xBoton).show();
				}else{
					$(xBoton).hide();
				}
				break;
			case '3':
				$(xBoton).slidetoggle();
				break;
			default:
				$(xBoton).fadetoggle();
				break;
		}
	});

});
