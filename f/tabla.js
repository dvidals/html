/*var actuFi= function (opc, Id){
	switch(opc){
		case "engadir":
			var Id=Id || '200';
			var Valores={
				'Id' : Id,
				'Usuario' : $('#Usuario').val(),
				'Apelidos' : $('#Apelidos').val(),
				'Nome' : $('#Nome').val(),
				'Email' : $('#Email').val(),
				'TipoUsu' : $('#TipoUsu').val(),
				'Sustituto' : $('#Sustituto').val()
			};
			taboa.row.add(valores).draw(false);
		break;
		case "editar":
			var fila = taboa.row(trActual).index()
			var colus = taboa.colums().header().count()
			var valores = []
	}
}

	{data: 'TipoUsu'
		render: function (data)
			if(data==5){
				ver=''
			}}
*/

/*//Engadir
var engU = function(){
	reseteaForm();
	cargaPrf();
	$('#id').val("");
	$('#metodo').remove();
	var url = "/adm/profes";
	$('#frmModal').attr('action', url);
	$('div.ichechkbox_flat-blue').removeClass('checked')
}*/
var engU=function(){
	$('#vmodal').modal({show: true, backdrop:false, keyboard: false});
}

$(function(){
	var mitabla=$('#mitabla').DataTable({
		language:{url:"plugins/dataTables/Galician.json"},
		destroy: true,
		deferRender: true,
		stateSave: true,
		 //dom: 'lBfrtip', 
		 //dom:"<'row'<'form-inline'<'col-sm-7'lB><'col-sm-5'f>>><rt><'row'<'form-inline'<'col-sm-6'i><'col-sm-6'p>>>",
		 dom:"<'row'<'form-inline'<'col-sm-3'l><'col-sm-6'B><'col-sm-3'f>>><rt><'row'<'form-inline'<'col-sm-6'i><'col-sm-6'p>>>",
        buttons: [
       /* {
        	text:"<i class='fa fa-user-plus></i>Engadir",
        	titleAttr:"Engadir",
        	className: 'btn btn-success btn-md',
        	action: function(){
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
        } 
       }

    
      ]

});

$('#salvar').click(function(event){
	var valores=[$('#n').val(),
				 $('#nombre').val(),
				 $('#apellido').val(),
				 $('#usuario').val()		
				];
mitabla.row.add(valores).draw('false');

});
});

