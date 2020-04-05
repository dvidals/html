$(document).ready(function() {
    var nuevaid;
   var accion;
   var boton;
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

$('#salvar').click(function(){
  
switch(accion){

  case "anadir":
 
  actualizarBD(accion);
	
	var valores={'id':$('#inputid').val(),
				 'razon_social':$('#inputrazon_social').val(),
				 'direccion':$('#inputdireccion').val(),
				 'poblacion':$('#inputpoblacion').val(),
				 'codpostal':$('#inputcodpostal').val(),	
         'provincia':$('#inputprovincia').val(),    
         'pais':$('#inputpais').val(),    
         'contacto':$('#inputcontacto').val(),
         'telefono':$('#inputtelefono').val(),    	
         'movil':$('#inputmovil').val()  
				};

     

        	mitabla.row.add(valores).draw('false');


  break;

  case "editar":
  
  actualizarBD(accion);
    var f=boton.closest('tr');
    var fila=mitabla.row(f).index();
    var valores= [$('#inputrazon_social').val(),
         $('#inputdireccion').val(),
         $('#inputpoblacion').val(),
         $('#inputcodpostal').val(), 
         $('#inputprovincia').val(), 
         $('#inputpais').val(),  
         $('#inputcontacto').val(),
         $('#inputtelefono').val(),
         $('#inputmovil').val()
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
    $('#titulomodal').html("¿Estás seguro de querer eliminar esta empresa?");
    $('#salvar').addClass('btn-danger');
    $('#vmodal').modal({show: true, backdrop:false, keyboard: false});
    $('#inputid').val(mitabla.cell(fila,0).data()).prop("disable", true);
    $('#inputrazon_social').val(mitabla.cell(fila,1).data()).prop("disable", true);
    $('#inputdireccion').val(mitabla.cell(fila,2).data()).prop("disable", true);
    $('#inputpoblacion').val(mitabla.cell(fila,3).data()).prop("disable", true);
    $('#inputcodpostal').val(mitabla.cell(fila,4).data()).prop("disable", true);
    $('#inputprovincia').val(mitabla.cell(fila,5).data()).prop("disable", true); 
    $('#inputpais').val(mitabla.cell(fila,6).data()).prop("disable", true); 
    $('#inputcontacto').val(mitabla.cell(fila,7).data()).prop("disable", true);   
    $('#inputtelefono').val(mitabla.cell(fila,8).data()).prop("disable", true);  
    $('#inputmovil').val(mitabla.cell(fila,9).data()).prop("disable", true);
        });

  $('#example tbody').on('click','.editar', function(){
    accion="editar";
    boton=$(this);
    var f=boton.closest('tr');
    var fila=mitabla.row(f).index();
    $('#salvar').html("Actualizar");
    $('#titulomodal').html("Actualizar datos de empresa");
     $('#salvar').addClass('btn-info');
    $('#vmodal').modal({show: true, backdrop:false, keyboard: false});
        
    $('#inputid').val(mitabla.cell(fila,0).data()).prop("disable", true);
    $('#inputrazon_social').val(mitabla.cell(fila,1).data()).prop("disable", true);
    $('#inputdireccion').val(mitabla.cell(fila,2).data()).prop("disable", true);
    $('#inputpoblacion').val(mitabla.cell(fila,3).data()).prop("disable", true);
    $('#inputcodpostal').val(mitabla.cell(fila,4).data()).prop("disable", true);
    $('#inputprovincia').val(mitabla.cell(fila,5).data()).prop("disable", true); 
    $('#inputpais').val(mitabla.cell(fila,6).data()).prop("disable", true); 
    $('#inputcontacto').val(mitabla.cell(fila,7).data()).prop("disable", true);   
    $('#inputtelefono').val(mitabla.cell(fila,8).data()).prop("disable", true);  
    $('#inputmovil').val(mitabla.cell(fila,9).data()).prop("disable", true);
        });

   });

  var engU=function(){
    $('#formulario')[0].reset();   
    $('#inputid').prop("disable", false);
    $('#inputrazon_social').prop("disable", false);
    $('#inputdireccion').prop("disable", false);
    $('#inputpoblacion').prop("disable", false);
    $('#inputcodpostal').prop("disable", false); 
    $('#inputprovincia').prop("disable", false); 
    $('#inputpais').prop("disable", false); 
    $('#inputcontacto').prop("disable", false); 
    $('#inputtelefono').prop("disable", false); 
    $('#inputmovil').prop("disable", false);
  $('#vmodal').modal({show: true, backdrop:false, keyboard: false});
}

function actualizarBD(acc){
  
$.ajax({
    
    url:"ajax/data/inversae.php",
    data: $("#formulario").serialize()+"&accion="+acc,
     
    type: "POST",
    
   
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


         
    

       

       

