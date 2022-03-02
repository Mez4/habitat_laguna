<?php

class Conexion //Archivo para conexion a basede datos
{
	private $host;
	private $user;
	private $pass;
	private $bd;
	
	public function __construct()
	{
		$this->host = 'localhost';
		$this->user = 'root';
		$this->pass = '';
		$this->bd = 'tienda';

		$con = mysql_connect($this->host, $this->user, $this->pass);
		if ($con) {
			mysql_select_db($this->bd, $con);
		}
	}

	public function consulta($sql)
	{
		mysql_query($sql);
	}

	public function consultaRetorno($sql)
	{
		$consulta = mysql_query($sql);
		return $consulta;
	}
}

?>