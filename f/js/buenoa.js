$(document).ready(function() {
   var mitabla=$('#example').DataTable( {
       // ajax: 'ajax/data/objects.txt',
        ajax:'ajax/data/lalumnos.php',
        language:{url:"plugins/dataTables/Galician.json"},
         columns: [
         	{"data":"id"},
          {"data":"usuario"},
          {"data":"passwd"},
          {"data":"alta"},
          {"data":"baja"},
          {"data":"apellidos"},
          {"data":"dni"},
          {"data":"direccion"},
          {"data":"poblacion"},
          {"data":"codpostal"},
          {"data":"provincia"},
          {"data":"fechanac"},
          {"data":"nombret"},
          {"data":"horas"},
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
        }
      ]


});

   $('#salvar').click(function(){
  
switch(accion){
  case "anadir":
  actualizarBD(accion);
  
  var valores={'id':$('#inputid').val(),
         'alumno':$('#inputalumno').val(),
         'usuario':$('#inputusuario').val(),
         'docente':$('#inputdocente').val(),
         'usuario':$('#inputusuario').val(),    
         'inicio':$('#inputinicio').val(),
         'fin':$('#inputfin').val(),
         'horas':$('#inputhoras').val(), 
         'empresa':$('#inputempresa').val(),  
         'razon_social':$('#inputrazon_social').val()    
        };

          mitabla.row.add(valores).draw('false');


  break;
//guarda los cambios introducidos en la modal de edición:
  case "editar": 
  actualizarBD(accion);
    var f=boton.closest('tr');
    var fila=mitabla.row(f).index();
    mitabla.cell(fila,13).data($('#inputhoras').val());
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

//abre modal de edición:
$('#example tbody').on('click','.editar', function(){
    accion="editar";
    boton=$(this);
    var f=boton.closest('tr');
     var fila=mitabla.row(f).index();
    $('#salvar').html("Actualizar");
    $('#titulomodal').html("Actualizar horas del alumno");
    $('#salvar').addClass('btn-info');
    $('#vmodal').modal({show: true, backdrop:false, keyboard: false});
    $('#inputid').val(mitabla.cell(fila,0).data()).prop("disable", false);
    $('#inputhoras').val(mitabla.cell(fila,13).data()).prop("disable", false);
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
   
    url:"ajax/data/inversalumno.php",
    data: $("#formulario").serialize()+"&accion="+acc,
    dataType:"text", 
    type: "POST",
    })

  .success (function(data){
          nuevaid=data;


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


  




         
    

       

       

