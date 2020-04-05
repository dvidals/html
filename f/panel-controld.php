<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel Docentes</title>

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
      
      <a class="navbar-brand" href="#"><img class="logo" src="img/logo9.png"></a>
      <input type="button" value="Accede a tus datos" onClick="window.location = 'misdatos.php';"> 
    </div>
  </div><!-- /.container-fluid -->
</nav>
<div class="container">
<div class="panel panel-primary"> 
<div class="table-responsive"> 
<table id="example" class="table table-hover table-striped table-bordered table-condensed" id="mitabla" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th class='Mostrar Ocultar'>Id Empresa</th>
                <th class='Mostrar'>Razón Social</th>
                <th class='Mostrar'>Dirección</th>
                <th class='Mostrar'>Población</th>
                <th class='Mostrar'>Código Postal</th>
                <th class='Mostrar'>Provincia</th>   
                <th class='Mostrar'>Pais</th>
                <th class='Mostrar'>Contacto</th>
                <th class='Mostrar'>Teléfono</th>
                <th class='Mostrar'>Móvil</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Id Empresa</th>
                <th>Razón Social</th>
                <th>Dirección</th>
                <th>Población</th>
                <th>Código Postal</th>
                <th>Provincia</th>
                <th>Pais</th>
                <th>Contacto</th>
                <th>Teléfono</th>
                <th>Móvil</th>
            </tr>
        </tfoot>
    </table>
    </div>
</div>
    </body>
    <script src="plugins/dataTables/datatables.js"></script>
    <!--<script src="js/jquery/jquery-3.1.1.js"></script> -->
    <script src="js/bootstrap/bootstrap.js"></script>
    <script src="js/buenod.js"></script>
</html>
