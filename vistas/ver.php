<?php
$controlador = new ProductoControlador();
if (isset($_GET['id'])) {
	$row = $controlador->ver($_GET['id']);
}else{
	header('Location: index.php');
}
?>

<b>Nombre: </b> <?php echo $row['nombre']; ?><br><br>
<b>Descripcion: </b> <?php echo $row['descripcion']; ?><br><br>
<img src="vistas/imagenes/<?php echo $row['imagen'] ?>" style="width: 100px; height: 100px;"><br><br>
<b>costo: </b> <?php echo $row['costo']; ?><br><br>
<b>Cantidad: </b> <?php echo $row['cantidad']; ?><br><br>