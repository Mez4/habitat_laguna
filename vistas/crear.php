<?php
$controlador = new ProductoControlador();
if (isset($_POST['enviar'])) {
	$r = $controlador->crear($_POST['nombre'], $_POST['descripcion'], $_POST['imagen'], $_POST['costo'], $_POST['cantidad']);

	if ($r) {
		echo "Se ha registrad un nuevo producto";
	}else{
		echo "El producto que ingresaste ya existe";
	}

	header('Location: index.php');
}
?>

<h3>Registro de un producto</h3>
<hr>

<form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
    <div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label><br>
	        <input type="text" name="nombre" class="form-control" id="exampleInputName2" required style="display:block;"><br><br>
	    <label>Descripcion</label><br>
    	    <input type="text" name="descripcion" class="form-control" id="exampleInputName2" required><br>
	    <label>Imagen</label><br>
	        <input type="file" name="imagen" class="btn btn-default"><br>
	    <label>Costo</label><br>
	        <input type="number" name="costo" class="form-control" id="exampleInputName2" required ><br>
	    <label>Cantidad</label>
	        <input type="number" name="cantidad" required>
	   <hr>
	        <input type="submit" name="enviar" value="Crear" class="btn btn-default">
	</div>
</form>
