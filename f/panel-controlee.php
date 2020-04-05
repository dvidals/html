<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario Empresa</title>

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
        <input type="button" value="Volver" onClick="javascript:window.history.go(-1);"> 
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
        <h4 id="titulomodal"class="modal-title">Añadir Empresa</h4>
      </div>
      <div class="modal-body">
        <form id="formulario" >
  <div class="form-group">
  <div class="alert alert-danger hide" role="alert">Todos los campos tienen que contener algún dato</div>
    <label for="inputid"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>Id</label>
    <input type="text" class="form-control" id="inputid" name="id" placeholder="Id">
  </div>
  <div class="form-group">
    <label for="inputrazon_social"><span class="glyphicon glyphicon-start" aria-hidden="true"></span>Razón Social</label>
    <input type="text" class="form-control" id="inputrazon_social" name="razon_social" placeholder="Razón Social">
  </div>
  <div class="form-group">
    <label for="inputdireccion"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Dirección</label>
    <input type="text" class="form-control" id="inputdireccion" name="direccion" placeholder="Direccion">
  </div>
  <div class="form-group">
    <label for="inputpoblacion"><span class="glyphicon glyphicon-globe"></span>Población</label>
    <input type="text" class="form-control" id="inputpoblacion" name="poblacion" placeholder="Población">
  </div>
  <div class="form-group">
    <label for="inputcodpostal"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>Código Postal</label>
    <input type="text" class="form-control" id="inputcodpostal" name="codpostal" placeholder="Código Postal">
  </div>
   <div class="form-group">
    <label for="inputprovincia"><span  aria-hidden="true"></span>Provincia</label>
    <input type="text" class="form-control" id="inputprovincia" name="provincia" placeholder="Provincia">
  </div>
   <div class="form-group">
    <label for="inputpais"><span class="glyphicon glyphicon-flag" aria-hidden="true"></span>Pais</label>
    <input type="text" class="form-control" id="inputpais" name="pais" placeholder="Pais">
  </div>
   <div class="form-group">
    <label for="inputcontacto"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Contacto</label>
    <input type="text" class="form-control" id="inputcontacto" name="contacto" placeholder="Contacto">
  </div>
  <div class="form-group">
    <label for="inputtelefono"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>Teléfono</label>
    <input type="text" class="form-control" id="inputtelefono" name="telefono" placeholder="Teléfono">
  </div>
  <div class="form-group">
    <label for="inputmovil"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>Móvil</label>
    <input type="text" class="form-control" id="inputmovil" name="movil" placeholder="Móvil">
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
                <th class='Mostrar'>razon_social</th>
                <th class='Mostrar'>direccion</th>
                <th class='Mostrar'>poblacion</th>
                <th class='Mostrar'>codpostal</th>
                <th class='Mostrar'>provincia</th>
                <th class='Mostrar'>pais</th>
                <th class='Mostrar'>contacto</th>
                <th class='Mostrar'>telefono</th>
                <th class='Mostrar'>movil</th>
                <th></th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>razon_social</th>
                <th>direccion</th>
                <th>poblacion</th>
                <th>codpostal</th>
                <th>provincia</th>
                <th>pais</th>
                <th>contacto</th>
                <th>telefono</th>
                <th>movil</th>
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
    <script src="js/buenoee.js"></script>
</html>
