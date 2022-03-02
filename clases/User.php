<?php

include_once ('Conexion.php');

class User
{
	private $id;
	private $usuario;
	private $email;
	private $contrasena;
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
		$sql = "SELECT * FROM usuarios WHERE active = 1";
		$resultado = $this->con->consultaRetorno($sql);
		return $resultado;
	}

	public function crear()
	{
        $sql = "INSERT INTO usuarios (usuario, email, contrasena,active)
			VALUES ('{$this->usuario}', '{$this->email}', '{$this->contrasena}', 1)";

			$this->con->consultaRetorno($sql);
			return true;
	}

    public function validar(){
        $sql = "SELECT id COUNT(id) as 'exist' FROM  usuarios WHERE usuario = '{$this->usuario}' and contrasena = '{$this->contrasena}' LIMIT 1";
        $resultado = $this->con->consultaRetorno($sql);
		$row = mysql_fetch_assoc($resultado);

		return $row;
    }

    public function login($id){
        $sql = "SELECT * FROM  usuarios WHERE usuario = '{$this->usuario}' and contrasena = '{$this->contrasena}' LIMIT 1";
        $resultado = $this->con->consultaRetorno($sql);
		$row = mysql_fetch_assoc($resultado);

		return $row;
    }

    public function logout(){
        session_start();
        session_destroy();
    }

	public function eliminar()
	{
		$sql = "DELETE FROM usuarios WHERE id = '{$this->id}'";
		$this->con->consulta($sql);
	}

	public function ver()
	{
		$sql = "SELECT * FROM usuarios WHERE id = '{$this->id}' LIMIT 1";
		$resul = $this->con->consultaRetorno($sql);
		$row = mysql_fetch_assoc($resul);

		return $row;
	}

}

?>
