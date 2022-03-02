<?php 
include_once ('../clases/User.php');
class usuariosControlador {
    private $usuario;
    public function __construct(){
        
        $this->usuario = new User();
        
    }
    public function crear($usuario,$email,$contrasena){
        $this->usuario->set('usuario', $usuario);
		$this->usuario->set('email', $email);
		$this->usuario->set('contrasena', md5($contrasena));
		$resultado = $this->usuario->crear();
		return $resultado;
    }
    public function validar($usuario,$contrasena){
        $this->usuario->set('usuario', $usuario);
		$this->usuario->set('contrasena', md5($contrasena));
        $valid = $this->usuario->validar();
        print_r($valid);
        if($valid['exist'] == 1){
            session_start();
            $_SESSION["log"] = $this->usuario->login($valid['id']);
            header('Location: ../vistas/index.php');
        }
        else{
            header('Location: ../index.html');
        }
    }
}