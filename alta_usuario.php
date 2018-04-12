<title>Registro de usuarios</title>
 </head>
 <body>
+<?php
+session_start();
+
+if ($_SESSION['pag']<1){
+	header("Location: login.php");
+}
+
+$_SESSION['pag']=0;
+
+$_SESSION['alta']=1;
+
+?>
+<div class="encabezado">
 <h2>Registro de usuarios</h2>
-<div>
+</div>
+
+<div class="contenido">
 <form action="alta.php" method="post">
 <p>Introduzca su nombre y apellidos</p>
-Nombre: <input type="text" name="nombre"><br><br>
-Apellido paterno: <input type="text" name="apaterno"><br><br>
+Nombre: <input type="text" name="nombre" required><br><br>
+Apellido paterno: <input type="text" name="apaterno" required><br><br>
 Apellido materno: <input type="text" name="amaterno"><br><br>
 </div>
-<div>
+<div class="contenido">
 <p>Introduzca sus datos para nuevo usuario</p>
-Nombre de usuario: <input type="text" name="telefono"><br><br>
-Contraseña: <input type="password" name="contasenya"><br><br>
+Nombre de usuario: <input type="text" name="user" required><br><br>
+Contraseña: <input type="password" name="pass" required><br><br>
 <input type="submit" value="Enviar">
 </form>
 </div>
+
+<div class="pie">
+	<a href="creditos.php">Ver creditos y cerrar sesion</a>
+</div>
 </body>
 </html>
