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
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuario <span class="glyphicon glyphicon-user"></span></a>
          <ul class="dropdown-menu">
            <li><a href="alumnos.php">Alumnos</a></li>
            <li><a href="profes.php">Profesores</a></li>
            
            <li role="separator" class="divider"></li>
            
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span ></span>Empresas <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
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
    <label for="usuario"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Usuario</label>
    <input type="text" class="form-control" id="inputusuario" name="usuario" placeholder="Usuario">
  </div>
  <div class="form-group">
    <label for="passwd"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span>Passwd</label>
    <input type="text" class="form-control" id="inputpasswd" name="passwd" placeholder="Passwd">
  </div>
  <div class="form-group">
    <label for="tipousuario"><span class="glyphicon glyphicon-phone-alt"></span>tipousuario</label>
    <input type="text" class="form-control" id="inputtipousuario" name="tipousuario" placeholder="Tipousuario">
  </div>
  <div class="form-group">
    <label for="alta"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>Alta</label>
    <input type="text" class="form-control" id="inputalta" name="alta" placeholder="Alta">
  </div>
   <div class="form-group">
    <label for="activo"><span class="glyphicon glyphicon-euro" aria-hidden="true"></span>Activo</label>
    <input type="text" class="form-control" id="inputactivo" name="activo" placeholder="Activo">
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
                <th class='Mostrar Ocultar'>Id</th>
                <th class='Mostrar'>Usuario</th>
                <th class='Mostrar'>Passwd</th>
                <th class='Mostrar'>Tipousuario</th>
                <th class='Mostrar'>Alta</th>
                <th class='Mostrar'>Baja</th>
                <th class='Mostrar'>Activo</th>
                <th class='Mostrar'>Datos</th>
                <th></th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>Usuario</th>
                <th>Passwd</th>
                <th>Tipousuario</th>
                <th>Alta</th>
                <th>Baja</th>
                <th>Activo</th>
                <th>Datos</th>
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
    <script src="bueno.js"></script>
</html>
