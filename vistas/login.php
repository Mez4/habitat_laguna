<?php
require_once '../controladores/usuariosControlador.php';
$controlador = new usuariosControlador();
if (isset($_POST['enviar'])) {
	$controlador->validar($_POST['usuario'], $_POST['contrasena']);
}
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>login | Habitat laguna</title>
    <link rel="stylesheet" href="../estilos/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1">
    <link href="https://file.myfontastic.com/DqhBucJDoXdHMfbHGp9P6j/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700|Raleway:300,400" rel="stylesheet">
    <link rel="icon" type="image/png" href="../imagenes/logo.png">
  </head>

<hr>
<section class="content">
<form action="" method="POST" enctype="multipart/form-data"  class="formulario">
    <div class="form-group">
	    <label for="inputEmail3" class="campo">Usuario</label><br>
	        <input type="text" name="usuario"  id="exampleInputName2" required autofocus class="opcion"><br><br>
	    <label class="campo">Contraseña</label><br>
	        <input type="password" name="contrasena"  id="exampleInputName2" required class="opcion"><br>
	        <input type="submit" name="enviar" value="Entrar" class="entrar">
	        <!--<input onclick="go()" href="inicio.php" id="boton" type="button" value="ENTRAR">-->
	</div>
</form>
	 <img src="../imagenes/logo.png" class="imagen">
     <a href="../index.html" class="regresar">Regresar</a>
</section>
<script>
  function go(){
      if(document.form.contrasena.value=='123'&& document.form.usuario.value=='HL'){
          document.form.submit();
    }
    else {
      alert("Checa");
    }
  }
  </script>
</html>