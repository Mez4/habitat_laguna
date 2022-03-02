<?php

include_once ('Conexion.php');

class Producto
{
	private $id;
	private $nombre;
	private $descripcion;
	private $imagen;
	private $costo;
	private $cantidad;
	private $con;
	
	public function __construct()
	{
		$this->con = new Conexion();
	}

	public function set($atributo, $contenido){
		$this->$atributo = $contenido;
	}

	public function get($atributo){
		return $this->$atributo;
	}

	public function listar()
	{
		$sql = "SELECT * FROM productos WHERE activo = 1";
		$resultado = $this->con->consultaRetorno($sql);
		return $resultado;
	}

	public function crear()
	{
        if (basename($_FILES['imagen']['name'])) {
            $target_path = "vistas/imagenes/";
            $nombre_img = basename($_FILES['imagen']['name']);
            $target_path = $target_path . basename($_FILES['imagen']['name']);
            if(move_uploaded_file($_FILES['imagen']['tmp_name'], $target_path)) {
                echo "El archivo ". basename( $_FILES['imagen']['name']). " ha sido subido";
            } else{
                echo "Ha ocurrido un error, trate de nuevo!";
            }
        } else {
            $nombre_img = 'defaultt.jpg';
        }

		$consul = "SELECT * FROM productos WHERE nombre = '{$this->nombre}'";
		$resul = $this->con->consultaRetorno($consul);
		$existe = mysql_num_rows($resul);

		if ($existe != 0) {
			return true;
		} else {
			$sql = "INSERT INTO productos (nombre, descripcion, imagen, costo, cantidad)
			VALUES ('{$this->nombre}', '{$this->descripcion}', '{$nombre_img}', '{$this->costo}', '{$this->cantidad}')";

			$this->con->consulta($sql);
			return true;
		}
	}

	public function eliminar()
	{
		$sql = "DELETE FROM productos WHERE id = '{$this->id}'";
		$this->con->consulta($sql);
	}

	public function ver()
	{
		$sql = "SELECT * FROM productos WHERE id = '{$this->id}' LIMIT 1";
		$resul = $this->con->consultaRetorno($sql);
		$row = mysql_fetch_assoc($resul);

		return $row;
	}

	public function editar()
	{
		if (basename($_FILES['imagen']['name'])) {
			$target_path = "vistas/imagenes/";
			$nombre_img = basename($_FILES['imagen']['name']);
			$target_path = $target_path . basename($_FILES['imagen']['name']);
			if(move_uploaded_file($_FILES['imagen']['tmp_name'], $target_path)) {
				echo "El archivo ". basename( $_FILES['imagen']['name']). " ha sido subido";
			} else{
				echo "Ha ocurrido un error, trate de nuevo!";
			}

			$sql = "UPDATE productos SET descripcion = '{$this->descripcion}', imagen = '{$nombre_img}', costo = '{$this->costo}', cantidad = '{$this->cantidad}' WHERE id = '{$this->id}'";
		}
        else{
            $sql = "UPDATE productos SET descripcion = '{$this->descripcion}', costo = '{$this->costo}', cantidad = '{$this->cantidad}' WHERE id = '{$this->id}'";
        }
		$this->con->consulta($sql);
	}

	/*public function __destruct()
	{
		echo $this->id;
		echo $this->nombre; //Este no lo imprime porque no se setea
	}*/
}

?>