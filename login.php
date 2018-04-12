<html>
 <head>
 <meta charset='UTF-8'>
<!--<link rel="stylesheet" type="text/css" href="css/style.css">-->
<link rel="stylesheet" type="text/css" href="css/style.css">
 <title>Inicio</title>
 </head>
 <body>
<div class="encabezado">
	<h3>Iniciar sesión</h3>
</div>

<div class="contenido">
 <?php
 //Se reinicia la sesión para evitar accesos no autorizados.
 session_start();
 ?>
 <form action="autenticar.php" method="post">
	<p>Introduzca su información de registro</p>
	<h4>Introduzca su información de registro</h4>
 	Usuario: <input type="text" name="usuario" autocomplete="off"><br><br>
 	Contraseña: <input type="password" name="contrasenia" autocomplete="off"><br><br>
 	<input type="submit" value="Ingresar">
 </form>
</div>

<div class="pie">
	<a href="creditos.php">Ver creditos</a>
</div>
</body>
</html> 
