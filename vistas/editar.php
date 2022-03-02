<?php

$controlador = new ProductoControlador();
if (isset($_GET['id'])) {
	$row = $controlador->ver($_GET['id']);
}else{
	header('Location: index.php');
}
if (isset($_POST['editar'])) {
	$controlador->editar($_GET['id'], $_POST['descripcion'], $_POST['imagen'], $_POST['costo'], $_POST['cantidad']);
	header('Location: index.php');
}

?>

<form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
<div class="form-group">
<br><br>
	Descripcion: <input type="text" name="descripcion" value="<?php echo $row['descripcion']; ?>"><br><br>
	Imagen: <input type="file" name="imagen" value="<?php echo $row['imagen']; ?>"><br><br>
	Costo: <input type="number" name="costo" value="<?php echo $row['costo']; ?>"><br><br>
	Cantidad: <input type="number" name="cantidad" value="<?php echo $row['cantidad']; ?>"><br><br>
	<span class="icon-pencil"></span><input type="submit" name="editar" value="Editar" class="btn btn-default">
</div>
</form>