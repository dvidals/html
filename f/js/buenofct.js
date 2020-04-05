$(document).ready(function() {
   var nuevaid;
   var accion;
   var boton;
   var mitabla=$('#example').DataTable( {
       // ajax: 'ajax/data/objects.txt',
        ajax:'ajax/data/lfct.php',
        language:{url:"plugins/dataTables/Galician.json"},
         columns: [
         	{"data":"id"},
         	{"data":"alumno"},
         	{"data":"nombreal"},
         	{"data":"docente"},
         	{"data":"nombretu"},
         	{"data":"inicio"},
          {"data":"fin"},
          {"data":"horas"},
          {"data":"empresa"},
          {"data":"razon_social"},
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

$('#salvar').click(function(){
  
switch(accion){
  case "anadir":
  actualizarBD(accion);
	
	var valores={'id':$('#inputid').val(),
				 'alumno':$('#inputalumno').val(),
				 'usuario':$('#inputnombreal').val(),
				 'docente':$('#inputdocente').val(),
				 'usuario':$('#inputnombretu').val(),		
         'inicio':$('#inputinicio').val(),
         'fin':$('#inputfin').val(),
         'horas':$('#inputhoras').val(), 
         'empresa':$('#inputempresa').val(),  
         'razon_social':$('#inputrazon_social').val()    
				};

        	mitabla.row.add(valores).draw('false');


  break;

  case "editar":
  actualizarBD(accion);
    var f=boton.closest('tr');
    var fila=mitabla.row(f).index();
    var valores= [$('#inputid').val(),
        $('#inputalumno').val(),
         $('#inputusuario').val(),
         $('#inputdocente').val(),
         $('#inputusuario').val(),  
         $('#inputinicio').val(),  
         $('#inputfin').val(),
         $('#inputhoras').val(),
         $('#inputempresa').val(),
         $('#inputrazon_social').val()    
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
    $('#titulomodal').html("¿Estás seguro de querer eliminar esta FCT?");
    $('#salvar').addClass('btn-danger');
    $('#vmodal').modal({show: true, backdrop:false, keyboard: false});
    $('#inputid').val(mitabla.cell(fila,0).data()).prop("disable", true);
    $('#inputalumno').val(mitabla.cell(fila,1).data()).prop("disable", true);
    $('#inputnombreal').val(mitabla.cell(fila,2).data()).prop("disable", true);
    $('#inputdocente').val(mitabla.cell(fila,3).data()).prop("disable", true);
    $('#inputnombretu').val(mitabla.cell(fila,4).data()).prop("disable", true); 
    $('#inputinicio').val(mitabla.cell(fila,5).data()).prop("disable", true); 
    $('#inputfin').val(mitabla.cell(fila,6).data()).prop("disable", true);
    $('#inputhoras').val(mitabla.cell(fila,7).data()).prop("disable", true);
    $('#inputempresa').val(mitabla.cell(fila,8).data()).prop("disable", true);
    $('#inputrazon_social').val(mitabla.cell(fila,9).data()).prop("disable", true);
        });



$('#example tbody').on('click','.editar', function(){
    accion="editar";
    boton=$(this);
    var f=boton.closest('tr');
     var fila=mitabla.row(f).index();
    $('#salvar').html("Actualizar");
    $('#titulomodal').html("Actualizar datos de la FCT");
    $('#salvar').addClass('btn-info');
    $('#vmodal').modal({show: true, backdrop:false, keyboard: false});
    $('#inputid').val(mitabla.cell(fila,0).data()).prop("disable", false);
    $('#inputalumno').val(mitabla.cell(fila,1).data()).prop("disable", true);
    $('#inputnombreal').val(mitabla.cell(fila,2).data()).prop("disable", false);
    $('#inputdocente').val(mitabla.cell(fila,3).data()).prop("disable", true);
    $('#inputnombretu').val(mitabla.cell(fila,4).data()).prop("disable", false); 
    $('#inputinicio').val(mitabla.cell(fila,5).data()).prop("disable", false); 
    $('#inputfin').val(mitabla.cell(fila,6).data()).prop("disable", false);
    $('#inputhoras').val(mitabla.cell(fila,7).data()).prop("disable", false);
    $('#inputempresa').val(mitabla.cell(fila,8).data()).prop("disable", true);
    $('#inputrazon_social').val(mitabla.cell(fila,9).data()).prop("disable", false);
        });
 });
   
  var engU=function(){
    $('#formulario')[0].reset();   
    $('#inputid').prop("disable", false);
    $('#inputalumno').prop("disable", false);
    $('#inputnombre').prop("disable", false);
    $('#inputdocente').prop("disable", false);
    $('#inputnombre').prop("disable", false); 
    $('#inputinicio').prop("disable", false);
    $('#inputfin').prop("disable", false);
    $('#inputhoras').prop("disable", false);
    $('#inputempresa').prop("disable", false);
    $('#inputrazon_social').prop("disable", false);
  $('#vmodal').modal({show: true, backdrop:false, keyboard: false});
}

function actualizarBD(acc){
 
$.ajax({
   
    url:"ajax/data/inversafct.php",
    data: $("#formulario").serialize()+"&accion="+acc,
    dataType:"text", 
    type: "POST",
    })

  .success (function(data){
         


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

         
    

       

       

