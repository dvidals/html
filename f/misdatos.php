<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario</title>

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
      <input type="button" value="Volver" onClick="javascript:window.history.go(-1);"> 
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
   
  </div><!-- /.container-fluid -->
</nav>
<div class="panel panel-primary"> 
  <div class="modal fade" id="vmodal" tabindex="-1" role="dialog">
    
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
                <th class='Mostrar'>Apellidos</th>
                <th class='Mostrar'>DNI</th>
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
                <th>Apellidos</th>
                <th>DNI</th>
            </tr>
        </tfoot>
    </table>
    </div>
</div>
    </body>
    <script src="plugins/dataTables/datatables.js"></script>
    <!--<script src="js/jquery/jquery-3.1.1.js"></script> -->
    <script src="js/bootstrap/bootstrap.js"></script>
    <script src="js/buenodatos.js"></script>
</html>
