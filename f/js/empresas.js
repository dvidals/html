$(document).ready(function() {
   var mitabla=$('#example').DataTable( {
       // ajax: 'ajax/data/objects.txt',
        ajax:'ajax/data/lempresas.php',
        language:{url:"plugins/dataTables/Galician.json"},
         columns: [
         	{"data":"id"},
         	{"data":"razon_social"},
         	{"data":"direccion"},
         	{"data":"poblacion"},
         	{"data":"codpostal"},
         	{"data":"provincia"},
          {"data":"pais"},
          {"data":"contacto"},
          {"data":"telefono"},
          {"data":"movil"},
         	{"data": null,
         			orderable:false,
         			searchable:false,
         			sortable:false,
         			defaultContent:"<div class='text-center'><button type='button' class= 'editar btn btn-primary btn-xs' title='Editar rexistro'><i class='fa fa-pencil-square-o'></i></button>&nbsp;&nbsp;<button type='button' class='eliminar btn btn-danger btn-xs' title='Borrar rexistro'><i class='fa fa-trash-o'></i></button></div>"
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
  $('#inputusuario').removeClass('error');
  $('#inputpasswd').removeClass('error');
  $('#inputtipousuario').removeClass('error');
  $('#inputalta').removeClass('error');
  $('#inputactivo').removeClass('error');
  

  var valido=true;
  if($('#inputid').val()==""|| $('#inputid').val()==" "){
   $('#inputid').addClass('error');
   valido=false; 
  }
  if($('#inputusuario').val()==""|| $('#inputusuario').val()==" "){
  $('#inputusuario').addClass('error');
  valido=false;
  }

  if($('#inputpasswd').val()==""||$('#inputpasswd').val()==" "){
  $('#inputpasswd').addClass('error');
  valido=false;
  }
  if($('#inputtipousuario').val()=="" ||$('#inputtipousuario').val()==" "){
  $('#inputtipousuario').addClass('error');
  valido=false;
  }
  if($('#inputalta').val()=="" || $('#inputalta').val==" "){
  $('#inputalta').addClass('error');
  valido=false;
  }
  
  if($('#inputactivo').val()==""||$('#inputactivo').val()==" "){
  $('#inputactivo').addClass('error');
  valido=false;
  }
  return valido;
}
   
    var accion;
    var boton;
$('#salvar').click(function(){
  
switch(accion){

  case "anadir":
  if(!control()){
    $('.alert').removeClass('hide');
    return false;
  }
  actualizarBD(accion);
	
	var valores={'id':$('#inputid').val(),
				 'usuario':$('#inputusuario').val(),
				 'passwd':$('#inputpasswd').val(),
				 'tipousuario':$('#inputtipousuario').val(),
				 'alta':$('#inputalta').val(),		
         'activo':$('#inputactivo').val()  
				};

     

        	mitabla.row.add(valores).draw('false');


  break;

  case "editar":
  if(!control()){
    $('.alert').removeClass('hide');
    return false;
  }

  actualizarBD(accion);
    var f=boton.closest('tr');
    var fila=mitabla.row(f).index();
    var valores= [$('#inputid').val(),
        $('#inputusuario').val(),
         $('#inputpasswd').val(),
         $('#inputtipousuario').val(),
         $('#inputalta').val(),  
         $('#inputactivo').val(),  
         $('#inputdatos').val()
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


$('#example tbody').on('click','.eliminar', function(){
    accion="borrar";
    boton=$(this);
    var fila=boton.closest('tr');
    $('#salvar').html("Eliminar").addClass;
    $('#titulomodal').html("¿Estás seguro de querer eliminar este empleado?");
    $('#salvar').addClass('btn-danger');
    $('#vmodal').modal({show: true, backdrop:false, keyboard: false});
    $('#inputid').val(mitabla.cell(fila,0).data()).prop("disable", true);
    $('#inputusuario').val(mitabla.cell(fila,1).data()).prop("disable", true);
    $('#inputpasswd').val(mitabla.cell(fila,2).data()).prop("disable", true);
    $('#inputtipousuario').val(mitabla.cell(fila,3).data()).prop("disable", true);
    $('#inputalta').val(mitabla.cell(fila,4).data()).prop("disable", true); 
    $('#inputactivo').val(mitabla.cell(fila,5).data()).prop("disable", true);
        });

  $('#example tbody').on('click','.editar', function(){
    accion="editar";
    boton=$(this);
    var f=boton.closest('tr');
    var fila=mitabla.row(f).index();
    $('#salvar').html("Actualizar");
    $('#titulomodal').html("Actualizar datos de empleado");
     $('#salvar').addClass('btn-info');
    $('#vmodal').modal({show: true, backdrop:false, keyboard: false});
        
    $('#inputid').val(mitabla.cell(fila,0).data()).prop("disable", false);
    $('#inputusuario').val(mitabla.cell(fila,1).data()).prop("disable", false);
    $('#inputpasswd').val(mitabla.cell(fila,2).data()).prop("disable", false);
    $('#inputtipousuario').val(mitabla.cell(fila,3).data()).prop("disable", false);
    $('#inputalta').val(mitabla.cell(fila,4).data()).prop("disable", false); 
    $('#inputactivo').val(mitabla.cell(fila,5).data()).prop("disable", false);
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
  $('#vmodal').modal({show: true, backdrop:false, keyboard: false});
}

function actualizarBD(acc){
  //alert($("#formulario").serialize());
$.ajax({
    // En data puedes utilizar un objeto JSON, un array o un query string
    url:"ajax/data/inversa.php",
    data: $("#formulario").serialize()+"&accion="+acc,
     //Cambiar a type: POST si necesario
    type: "POST",
    // Formato de datos que se espera en la respuesta
    // otra forma
    /*    data: {"tipo": acc, "name" :$("#inputname").val(), "usuario" :$("#inputusuario").val(), "passwd": $("#inputpasswd").val(), "tipousuario": $("#tipousuario").val(), "alta": $("#inputalta").val(), "baja": $("#inputbaja").val()},

    dataType: "json",*/
    // URL a la que se enviará la solicitud Ajax
    
   
})
 /*.success(function(data){
  alert(data); if(data=="0")
 })*/
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


         
    

       

       

