<header>
 Usuario: <?php echo $_SESSION['usuario']['correo']?>
 <a href="categorias_admin.php">Home</a>
 <a href="<? php header('Location:' . getenv('HTTP_REFERER'));?>">Volver</a>
 <a href="logout.php">Cerrar sesión</a>
</header>
<hr>