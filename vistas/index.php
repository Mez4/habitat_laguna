<?php
include_once('../controladores/Enrutador.php');
include_once('../controladores/ProductoControlador.php');
session_start();
if($_SESSION["log"]){
    header('Location:../vistas/index.php');
?>
<!DOCTYPE html5>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link href="estilos/estilos.css" rel="stylesheet">
   <link rel="stylesheet" href="estilos/fonts/style.css">
    <link href="estilos/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<title>POO</title>
</head>
<body>
	<h1 class="title">Productos</h1>
	<nav class="main_menu">
		<ul class="menu">
			<li><a href="../vistas/index.php">Inicio</a></li>
			<li><a href="?cargar=crear">Registrar</a></li>
		</ul>
	</nav>
	<section class="table_content">
		<?php
			$enrutador = new Enrutador();
			if (isset($_GET['cargar'])) {
				if ($enrutador->validarGET($_GET['cargar'])) {
					$enrutador->cargarVista($_GET['cargar']);
				}
			}else{
				include_once('../vistas/inicio.php');
			}
		?>
	</section>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>
<?php
}
else{
  header('Location:../index.html');
}
?>