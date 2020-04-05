<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario Trabajadores</title>

    <!-- Bootstrap -->    
    <link href="plugins/dataTables/datatables.min.css" rel="stylesheet">
    <link href="css/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">
</head>
<body>
  <input type="hidden" id="idprofe" value="<?php .$_SESSION['id']. ?>" placeholder="">
  <input type="hidden" id="nombreprofe" value=".<?php $_SESSION['usuario']. ?>" placeholder="">
 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img class="logo" src="img/logo9.png"></a>
      <input type="button" value="Accede a tus datos" onClick="window.location = 'misdatos.php';"> 
    </div>
  </div><!-- /.container-fluid -->
</nav>
<div class="container">
<div class="panel panel-primary"> 
  <div class="modal fade" id="vmodal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
     <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 id="titulomodal"class="modal-title">Añadir Usuarios</h4>
      </div>
       <div class="modal-body">
        <form id="formulario" >
  <div class="form-group">
  <div class="alert alert-danger hide" role="alert">Todos los campos tienen que contener algún dato</div>
    <label for="id"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span>Id</label>
    <input type="text" class="form-control" readonly="readonly" id="inputid" name="id" placeholder="Id">
  </div>
  <div class="form-group">
    <label for="alumno"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Id Alumno</label>
    <input type="text" class="form-control" id="inputalumno" name="alumno" placeholder="Id Alumno">
  </div>
  <div class="form-group">
    <label for="nombre"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span>Nombre</label>
    <input type="text" class="form-control" readonly="readonly" id="inputnombre" name="nombre" placeholder="Nombre">
  </div>
  <div class="form-group">
    <label for="docente"><span class="glyphicon glyphicon-phone-alt"></span>Id Docente</label>
    <input type="text" class="form-control" readonly="readonly" id="inputdocente"  name="docente" placeholder="Id Docente">
  </div>
  <div class="form-group">
    <label for="nombre"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>Nombre</label>
    <input type="text" class="form-control" readonly="readonly" id="inputnombret" name="nombre" placeholder="Nombre">
  </div>
  <div class="form-group">
    <label for="inicio"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>Inicio</label>
    <input type="text" class="form-control" id="inputinicio" name="inicio" placeholder="Inicio">
  </div>
   <div class="form-group">
    <label for="fin"><span class="glyphicon glyphicon-euro" aria-hidden="true"></span>Fin</label>
    <input type="text" class="form-control" id="inputfin" name="fin" placeholder="Fin">
  </div>
   <div class="form-group">
    <label for="horas"><span class="glyphicon glyphicon-euro" aria-hidden="true"></span>Horas</label>
    <input type="text" class="form-control" id="inputhoras" name="horas" placeholder="Horas">
  </div>
   <div class="form-group">
    <label for="empresa"><span class="glyphicon glyphicon-euro" aria-hidden="true"></span>Id Empresa</label>
    <input type="text" class="form-control" id="inputempresa" name="empresa" placeholder="Id Empresa">
  </div>
  <div class="form-group">
    <label for="razon_social"><span class="glyphicon glyphicon-euro" aria-hidden="true"></span>Razón_Social</label>
    <input type="text" class="form-control" readonly="readonly" id="inputrazon_social" name="razon_social" placeholder="Razón Social">
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle btn-lg" aria-hidden="true"></span></button>
        <button id="salvar" type="button" class="btn btn-success"><span class="glyphicon glyphicon-floppy-save btn-lg" aria-hidden="true"></span></button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="table-responsive"> 
<table id="example" class="table table-hover table-striped table-bordered table-condensed" id="mitabla" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th class='Mostrar Ocultar'>Id FCT</th>
                <th class='Mostrar'> Id Alumno</th>
                <th class='Mostrar'>Alumno</th>
                <th class='Mostrar'>Id Docente</th>
                <th class='Mostrar'>Docente</th>
                <th class='Mostrar'>inicio</th>
                <th class='Mostrar'>fin</th>   
                <th class='Mostrar'>horas</th>
                <th class='Mostrar'>empresa</th>
                <th class='Mostrar'>razon_social</th>
                <th></th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Id FCT</th>
                <th>Id Alumno</th>
                <th>Alumno</th>
                <th>Id Docente</th>
                <th>Docente</th>
                <th>inicio</th>
                <th>fin</th>
                <th>horas</th>
                <th>empresa</th>
                <th>razon_social</th>
                <th></th>
            </tr>
        </tfoot>
    </table>
    </div>
</div>
    </body>
    <script src="plugins/dataTables/datatables.js"></script>
    <!--<script src="js/jquery/jquery-3.1.1.js"></script> -->
    <script src="js/bootstrap/bootstrap.js"></script>
    <script src="js/buenot.js"></script>
</html>
