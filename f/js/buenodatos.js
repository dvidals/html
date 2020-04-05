$(document).ready(function() {
   var nuevaid;
   var accion;
   var boton;
   var mitabla=$('#example').DataTable( {
       // ajax: 'ajax/data/objects.txt',
        ajax:'ajax/data/ldatos.php',
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
          {"data":"dni"}
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
   });

  


         
    

       

       

