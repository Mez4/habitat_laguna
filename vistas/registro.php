<?php
require_once '../controladores/usuariosControlador.php';
$controlador = new usuariosControlador();
if (isset($_POST['enviar'])) {
	$r = $controlador->crear($_POST['usuario'], $_POST['email'], $_POST['contrasena']);

	if ($r) {
		echo "Te haz registrado bien";
        //header('Location:../index.html');
	}else{
		echo "Ha ocurrido un error";
	}
}
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>registro | Habitat laguna</title>
    <link rel="stylesheet" href="../estilos/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1">
    <link href="https://file.myfontastic.com/DqhBucJDoXdHMfbHGp9P6j/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700|Raleway:300,400" rel="stylesheet">
    <link rel="icon" type="image/png" href="../imagenes/logo.png">
  </head>


<hr>
<section class="content">
	<form action="" method="POST" enctype="multipart/form-data" class="formulario">
    <div class="form-group">
	    <label for="inputEmail3" class="campo">Usuario</label><br>
	        <input type="text" name="usuario"  id="exampleInputName2" required class="opcion"><br><br>
	    <label class="campo">Email</label><br>
    	    <input type="text" name="email" id="exampleInputName2" required class="opcion"><br>
	    <label class="campo">Contraseña</label><br>
	        <input type="password" name="contrasena" id="exampleInputName2" required class="opcion"><br>
	        <input type="submit" name="enviar" value="Registrarme" class="entrar">
	</div>
	</form>
</section>
</html>