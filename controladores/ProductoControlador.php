<?php

include_once ('../clases/Producto.php');

class ProductoControlador
{
	private $producto;
	
	public function __construct()
	{
		$this->producto = new Producto();
	}

	public function index()
	{
		$resultado = $this->producto->listar();
		return $resultado;
	}

	public function crear($nombre, $descripcion, $imagen, $costo, $cantidad)
	{
		$this->producto->set('nombre', $nombre);
		$this->producto->set('descripcion', $descripcion);
		$this->producto->set('imagen', $imagen);
		$this->producto->set('costo', $costo);
		$this->producto->set('cantidad', $cantidad);

		$resultado = $this->producto->crear();
		return $resultado;
	}

	public function eliminar($id)
	{
		$this->producto->set('id', $id);
		$this->producto->eliminar();
	}

	public function ver($id)
	{
		$this->producto->set('id', $id);
		$datos = $this->producto->ver();
		return $datos;

	}

	public function editar($id, $descripcion, $imagen, $costo, $cantidad)
	{
		$this->producto->set('id', $id);
		$this->producto->set('descripcion', $descripcion);
		$this->producto->set('imagen', $imagen);
		$this->producto->set('costo', $costo);
		$this->producto->set('cantidad', $cantidad);
		$this->producto->editar();
	}
}

?>