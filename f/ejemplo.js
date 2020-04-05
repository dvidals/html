
var engU=function(){
	$('#vmodal').modal({show: true, backdrop:false, keyboard: false});
}

$(document).ready(function() {
    $('#example').DataTable( {
        ajax: 'ajax/data/objects.txt',
        language:{url:"plugins/dataTables/Galician.json"},
         columns: [
         	{"data":"name"},
         	{"data":"position"},
         	{"data":"office"},
         	{"data":"extn"},
         	{"data":"start_date"},
         	{"data":"salary"},
         	{"data": null,
         			orderable:false,
         			searchable:false,
         			sortable:false,
         			defaultContent:"<div class='text-center'><button type='button' class= 'editar btn btn-primary btn-xs' title='Editar rexistro'><i class='fa fa-pencil-square-o'></i></button>&nbsp;&nbsp;<button type='button' class='eliminar btn btn-danger btn-xs' title='Borrar rexistro'><i class='fa fa-trash-o'></i></button></div>"
         			}

         ],
          dom: 'Bfrtip',
        buttons: [
       /* {
        	text:"<i class='fa fa-user-plus></i>Engadir",
        	titleAttr:"Engadir",
        	className: 'btn btn-success btn-md',
        	action. function(){
        		engU();
        	} 
        },*/
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
        	text:'Ocultar Usuario',
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
        	text:"Modal",
        	titleAttr:"Modal",
        	className: 'btn btn-success btn-md',
        	action: function(){
        		engU();
        } ,


       }

    
      ]


});

//var actuFi = function (opc, Id){
	//switch (opc){

	//}
	//case "engadir"
	$('#salvar').click(function(event){
	var valores=[$('#name').val(),
				 $('#position').val(),
				 $('#office').val(),
				 $('#extn').val(),
				 $('#start_date').val(),	
				 $('#salary').val()	
				];
	mitabla.row.add(valores).draw('false');
	//break;

	//case "editar"
		//var fila = mitabla.row(_trActual).index();
		//var colus= mitabla.columns().header.conut()-1;
		//var valores= [$('#name').val(),
				// $('#position').val(),
				 //$('#office').val(),
				 //$('#extn').val(),
				 //$('#start_date').val(),	
				 //$('#salary').val()	
				 //];
				 //for (i=1; i<colus;i++){ mitabla.cell(fila,i).data(valores[i-1]);}
				 //mitabla.draw(false);
	//break;
	//case "borrar":
	//	mitabla.row(_trActual).remove().darw(false);
	//break;
//}

$('#mitabla tbody').on('click','eliminar', function(){
		var boton=$(this);
			var fila=boton.closest('tr');
			table.row(fila).remove().draw(false);
});


});
});

 