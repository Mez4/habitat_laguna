<?php

$controlador = new ProductoControlador();
if (isset($_GET['id'])) {
	$row = $controlador->ver($_GET['id']);
}else{
	header('Location: index.php');
}

if (isset($_POST['eliminar'])) {
	$controlador->eliminar($_GET['id']);
	header('Location: index.php');
}

?>

¿Desea eliminar a <?php echo $row['nombre'] . ' ' . $row['descripcion'] ?>?
<br><br>
<form action="" method="POST">
	<input type="submit" name="eliminar" value="Eliminar">
</form><br><br>
<button><a href="index.php">No eliminar</a></button>

