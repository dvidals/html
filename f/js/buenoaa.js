$(document).ready(function() {
   var nuevaid;
   var accion;
   var boton;
   var mitabla=$('#example').DataTable( {
       // ajax: 'ajax/data/objects.txt',
        ajax:'ajax/data/lalumno.php',
        language:{url:"plugins/dataTables/Galician.json"},
         columns: [
         	{"data":"id"},
         	{"data":"usuario"},
         	{"data":"passwd"},
         	{"data":"tipousuario"},
         	{"data":"alta"},
         	{"data":"baja"},
          {"data":"activo"},
          {"data":"apellidos"},
          {"data":"dni"},
          {"data":"direccion"},
          {"data":"poblacion"},
          {"data":"codpostal"},
          {"data":"provincia"},
          {"data":"fechanac"},
         	{"data": null,
         			orderable:false,
         			searchable:false,
         			sortable:false,
         			defaultContent:"<div class='text-center'><button type='button' class= 'editar btn btn-primary btn-xs' title='Editar rexistro'><i class='fa fa-pencil-square-o'></i></button>&nbsp;</div>"
         			}

         ],
          dom: 'lBfrtip',
        buttons: [
       
        {
        	extend: 'excelHtml5',
        	text: '<i class="fa fa-file-excel-o"></i>',
        	className: 'btn btn-success btn-md',
        	titleAttr: 'Exportar Excel' 
        },

        {
        	extend: 'csvHtml5',
        	text: '<i class="fa fa-file-text-o"></i>',
        	className: 'btn btn-info ',
        	titleAttr: 'Exportar CSV'
        },

        {
        	extend:'pdfHtml5',
        	text:'<i class="fa fa-file-pdf-o"></i>',
        	className:'btn btn-danger btn-md',
        	titleAttr:'Exportar PDF'
        },

        { 
        	extend: 'print',
        	text: '<i class="fa fa-print"></i>',
        	className:'btn btn-warning btn-md',
        	titleAttr:'Imprimir',
        	title: 'Listado de Clientes',
        	autoPrint: true

        },

        {
        	extend: 'copy',
        	text:'<i class="fa fa-files-o" aria-hidden="true"></i>',
        	className:'btn btn-md',
        	titleAttr:'Copiar al Portapeles'
        },
        {
        	extend: 'columnToggle',
        	text:'Ocultar Id',
        	className:'btn btn-danger btn-md',
        	titleAttr:'Ocultar',
        	columns: '.Ocultar'
        } , 
        {
        	extend: 'colvis',
        	text:'Mostrar',
        	className:'btn btn-info btn-md',
        	titleAttr:'Mostrar',
        	columns: '.Mostrar'
        },

        {
        	text:'<span class="glyphicon glyphicon-modal-window" aria-hidden="true"></span>'+" Insertar"  ,
        	titleAttr:"Insertar",
        	className: 'btn btn-success btn-md',
        	action: function(){
            accion="anadir";
        		engU();
        } 


       }

    
      ]


});
function control(){
  $('.alert').addClass('hide');
  var valido=true;
  if(!validatenombre($('#inputusuario').val())|| $('#inputusuario').val().length>30){
  $('#inputusuario').addClass('error');
  valido=false;
  }
 
  if(!validatepasswd($('#inputpasswd').val())){
    $('#inputpasswd').addClass('error');
    valido=false;
  }

  if($('#inputtipousuario').val()!=4){
  $('#inputtipousuario').addClass('error');
  valido=false;
  }

  if($('#inputalta').val()==""||$('#inputalta').val()==" "){
  $('#inputalta').addClass('error');
  valido=false;
  }

  if($('#inputactivo').val()==""||$('#inputactivo').val()==" "){
  $('#inputactivo').addClass('error');
  valido=false;
  }

  if($('#inputactivo').val()!=1 && $('#inputactivo').val()!=0){
  $('#inputactivo').addClass('error');
  valido=false;
  }
    
  if(!validatenombre($('#inputapellidos').val())){
  $('#inputapellidos').addClass('error');
  valido=false;
  }
  if($('#inputdni').val()==""||$('#inputdni').val()==" "||!validateDNI($('#inputdni').val())){
  $('#inputdni').addClass('error');
  valido=false;
  }
  if(!validatedireccion($('#inputdireccion').val())){
    $('#inputdireccion').addClass('error');
    valido=false;
  }
  if(!validatenombre($('#inputpoblacion').val())){
  $('#inputpoblacion').addClass('error');
  valido=false;
  }
  if (($('#inputcodpostal').val() >= "1" && $('#inputcodpostal').val() <= "52999") && $('#inputcodpostal').val().length == 5)
     valido=true;
    else{
        $('#inputcodpostal').addClass('error');
        valido=false;
  }
  if(!validatenombre($('#inputprovincia').val())){
  $('#inputprovincia').addClass('error');
  valido=false;
  }
  if($('#inputfechanac').val()==""||$('#inputfechanac').val()==" "){
  $('#inputfechanac').addClass('error');
  valido=false;
  }
  return valido;
}


function validatenombre(nombre){
var regex = /[a-zA-Z]{4,30}$/; 
// Se estaría utilizando sólo caracteres de la A-z.
//var regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){8,15}$/;
    if(regex.test(nombre)===true){
        return true;
    }else{
         return false;
    }
}

// Validar passwd:
 function validatepasswd(passwd){
var regex = /^[a-z\d_]{6,15}$/i;
// El password estaría utilizando sólo caracteres de la A-z y números.
//var regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){8,15}$/;
    if(regex.test(passwd)===true){
        return true;
    }else{
         return false;
    }
}

// Validar Dirección:
 function validatedireccion(direccion){
var regex = /^[a-z\d_]{6,40}$/i;
    if(regex.test(direccion)===true){
        return true;
    }else{
         return false;
    }
}

// Comprueba si es un DNI correcto (entre 5 y 8 letras seguidas de la letra que corresponda).

// Acepta NIEs (Extranjeros con X, Y o Z al principio)
function validateDNI(dni) {
    var numero, let, letra;
    var expresion_regular_dni = /^[XYZ]?\d{5,8}[A-Z]$/;

    dni = dni.toUpperCase();

    if(expresion_regular_dni.test(dni) === true){
        numero = dni.substr(0,dni.length-1);
        numero = numero.replace('X', 0);
        numero = numero.replace('Y', 1);
        numero = numero.replace('Z', 2);
        let = dni.substr(dni.length-1, 1);
        numero = numero % 23;
        letra = 'TRWAGMYFPDXBNJZSQVHLCKET';
        letra = letra.substring(numero, numero+1);
        if (letra != let) {
            //alert('Dni erroneo, la letra del NIF no se corresponde');
            return false;
        }else{
            //alert('Dni correcto');
            return true;
        }
    }else{
        //alert('Dni erroneo, formato no válido');
        return false;
    }
}



$('#salvar').click(function(){
  
switch(accion){
  case "anadir":
  if(!control()){
    $('.alert').removeClass('hide');
    $('#inputdni').attr('placeholder', 'Dni erróneo, formato no válido');
    $('#inputactivo').attr('placeholder','Este campo sólo puede tomar valor 1 para usario activo y valor 0 para inactivo');
    $('#inputcodpostal').attr('placeholder','Este campo tiene que contener 5 dígitos');
    $('#inputpasswd').attr('placeholder','Password entre 6 y 15 caracteres sin espacios (letras y/o nº)');
    $('#inputusuario').attr('placeholder','El nombre de usuario tiene entre 4 y 30 letras');
    $('#inputapellidos').attr('placeholder','Apellidos tiene entre 4 y 30 caracteres');
    $('#inputpoblacion').attr('placeholder','poblacion tiene entre 4 y 30 caracteres');
    $('#inputprovincia').attr('placeholder','provincia tiene entre 4 y 30 caracteres');
    $('#inputdireccion').attr('placeholder','Dirección tiene entre 6 y 40 caracteres (letras y/o nº)');
    $('#inputtipousuario').attr('placeholder','Alumnos es un tipo de usuario 4');
    return false;

  }
  actualizarBD(accion);
	
	var valores={'id':$('#inputid').val(),
				 'usuario':$('#inputusuario').val(),
				 'passwd':$('#inputpasswd').val(),
				 'tipousuario':$('#inputtipousuario').val(),
				 'alta':$('#inputalta').val(),		
         'activo':$('#inputactivo').val(),
         'apellidos':$('#inputapellidos').val(),
         'dni':$('#inputdni').val(), 
         'direccion':$('#inputdireccion').val(),  
         'poblacion':$('#inputpoblacion').val(),  
         'codpostal':$('#inputcodpostal').val(),  
         'provincia':$('#inputprovincia').val(),
         'fechanac':$('#inputfechanac').val()     
				};

     

        	mitabla.row.add(valores).draw('false');


  break;

  case "editar":
  actualizarBD(accion);
    var f=boton.closest('tr');
    var fila=mitabla.row(f).index();
    var valores= [$('#inputid').val(),
        $('#inputusuario').val(),
         $('#inputpasswd').val(),
         $('#inputtipousuario').val(),
         $('#inputalta').val(),  
         $('#inputactivo').val(),  
         $('#inputapellidos').val(),
         $('#inputdni').val(),
         $('#inputdireccion').val(),
         $('#inputpoblacion').val(),
         $('#inputcodpostal').val(),
         $('#inputprovincia').val(),
         $('#inputfechanac').val()
         ];
    var columnas=mitabla.columns().header().count()-1;
    for (i=0; i<columnas;i++){ mitabla.cell(fila,i).data(valores[i]);}
         mitabla.draw(false); 
  break;

  case "borrar":
  actualizarBD(accion);
    var fila=boton.closest('tr');
    mitabla.row(fila).remove().draw(false);  
    $('#vmodal').modal('hide');
        
    break;

    }

});


$('#example tbody').on('click','.editar', function(){
    accion="editar";
    boton=$(this);
    var f=boton.closest('tr');
     var fila=mitabla.row(f).index();
    $('#salvar').html("Actualizar");
    $('#titulomodal').html("Actualizar datos del alumno");
    $('#salvar').addClass('btn-info');
    $('#vmodal').modal({show: true, backdrop:false, keyboard: false});
    $('#inputid').val(mitabla.cell(fila,0).data()).prop("disable", false);
    $('#inputusuario').val(mitabla.cell(fila,1).data()).prop("disable", false);
    $('#inputpasswd').val(mitabla.cell(fila,2).data()).prop("disable", false);
    $('#inputtipousuario').val(mitabla.cell(fila,3).data()).prop("disable", false);
    $('#inputalta').val(mitabla.cell(fila,4).data()).prop("disable", false); 
    //$('#inputbaja').val(mitabla.cell(fila,5).data()).prop("disable", false); 
    $('#inputactivo').val(mitabla.cell(fila,6).data()).prop("disable", false);
    $('#inputapellidos').val(mitabla.cell(fila,7).data()).prop("disable", false);
    $('#inputdni').val(mitabla.cell(fila,8).data()).prop("disable", false);
    $('#inputdireccion').val(mitabla.cell(fila,9).data()).prop("disable", false);
    $('#inputpoblacion').val(mitabla.cell(fila,10).data()).prop("disable", false);
    $('#inputcodpostal').val(mitabla.cell(fila,11).data()).prop("disable", false);
    $('#inputprovincia').val(mitabla.cell(fila,12).data()).prop("disable", false);
    $('#inputfechanac').val(mitabla.cell(fila,13).data()).prop("disable", false);
        });
   });

  var engU=function(){
    $('#formulario')[0].reset();   
    $('#inputid').prop("disable", false);
    $('#inputusuario').prop("disable", false);
    $('#inputpasswd').prop("disable", false);
    $('#inputtipousuario').prop("disable", false);
    $('#inputalta').prop("disable", false); 
    $('#inputactivo').prop("disable", false);
    $('#inputapellidos').prop("disable", false);
    $('#inputdni').prop("disable", false);
    $('#inputdireccion').prop("disable", false);
    $('#inputpoblacion').prop("disable", false);
    $('#inputcodpostal').prop("disable", false);
    $('#inputprovincia').prop("disable", false);
    $('#inputfechanac').prop("disable", false);
  $('#vmodal').modal({show: true, backdrop:false, keyboard: false});
}

function actualizarBD(acc){
 
$.ajax({
   
    url:"ajax/data/inversaa.php",
    data: $("#formulario").serialize()+"&accion="+acc,
    dataType:"text", 
    type: "POST",
    })

  .success (function(data){
          alert(data);
          nuevaid=data;
         $('.error').html(data);


          //if(data.status=='success'){
          //var resus= '<select class="form-control" name="titulo" id="titulo title="Titulación">';
          //resu += '<option value="0" selected>Seleccciona titulo</option>';
          //for (i=9;i<data.data.length;i++){
          //resu += '<option value="'+data.data[i].codigo+'">'+data.data[i].denominacion+'</option>';
          //}
          //resu+='</select>';
          //$('#seltitulos').html(resu);
          //}
          //},
          //error: function(data){
          //    alert(data);    
          //  }


   })

 .done(function( data, textStatus, jqXHR ) {
     if ( console && console.log ) {
         console.log(data);
         console.log( "La solicitud se ha completado correctamente." );
     }
 })
 .fail(function( jqXHR, textStatus, errorThrown ) {
     if ( console && console.log ) {
         console.log( "La solicitud a fallado: " +  textStatus+" "+errorThrown);
     }
});
}

         
    

       

       

