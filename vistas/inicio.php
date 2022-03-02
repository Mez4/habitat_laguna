<?php
$controlador = new ProductoControlador();
$resultado = $controlador->index();
?>
<html>
	<head>
		<link rel="stylesheet" href="../estilos/tabla.css">
	</head>
	<body>
		<header class="titulo">
			<h3>Pagina de inicio</h3>
		</header>
		<table border="1" class="table">
			<thead>
				<th>ID</th>
				<th class="active">Nombre</th>
				<th >Descripción</th>
				<th style="display:none;">Imagen</th>
				<th>Costo</th>
				<th>Cantidad</th>
				<th>Acciones</th>
			</thead>
			<tbody>
				<?php while($row = mysql_fetch_array($resultado)): ?>
				<tr>
					<td><?php echo $row['id'] ?></td>
					<td class="active"><?php echo $row['nombre'] ?></td>
					<td><?php echo $row['descripcion'] ?></td>
					<td style="display:none;"><img src="vistas/imagenes/<?php echo $row['imagen'] ?>" style="width: 100px; height: 100px;"></td>
					<td><?php echo $row['costo'] ?></td>
					<td><?php echo $row['cantidad'] ?></td>
					<td>
						<a href="?cargar=ver&id=<?php echo $row['id'] ?>" class="boton">
							<span class="icon-eye"></span>
						</a>
						<a href="?cargar=editar&id=<?php echo $row['id'] ?>" class="boton">
						<span class="icon-pencil"></span>
						</a>

						<a href="?cargar=eliminar&id=<?php echo $row['id'] ?>" class="boton">
						<span class="icon-bin"></span>
						</a>

					</td>
				</tr>
				<?php endwhile; ?>
			</tbody>
		</table>
	</body>
</html>