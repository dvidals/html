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
	$('.miboton').click(function(){
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



/*Animaciones*/

$('#animar').click(function(){
	var horizontal= $('.caixa').width()-$('.bolita').width(),
		vertical= $('.caixa').height()-$('.bolita').height();
	$('.bolita')
	.animate({top: vertical, opacity:'0.5'})
	.delay(500)
	.animate({left: horizontal, opacity:'1'},1000)
	.delay(500)
	.animate({top: '0px', opacity:'0.5'})
	.delay(500)
	.animate({left: '0px', opacity:'1'},1000)
	
	});
/*Detener la animación*/
$('#parar').click(function(){
	$(".bolita").finish();
	$(".bolita").css("top","0px", "left", "0px");
	});


$ ('#boton1').click(function(){
	if($('div').hasClass('hide')){
		$('div').removeClass('hide');
	}else{
		$('div').addClass('hide');
	}	
});

//	$('#botonsubmit').click(function(){
//		if($('#email')==""|| $('#contra')==""){
//			$('#alerta').removeClass('hide');
//		}
//	});

	$('#bt').click(function(e){
		if($('#alerta').hasClass('hide')){
		$('#alerta').removeClass('hide');
	}else{
		$('#alerta').addClass('hide');
	}	
		if($('#password').val()==""){
			$('#alerta').removeClass('hide');
		}
	});
	
});

$(function(){
	$('#mitabla').DataTable({language:{url:"/plugins/dataTables/Spanish.json"}
});
});
