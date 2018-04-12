//Asignar funcion de conectar a una variable para conectar a la bd
 $conn = conectar();
 
+
+if ($_SESSION['pag']==0){
+	header("Location: login.php");
+}
+
 //Sanitizar los formularios (quitar caracteres especiales o no pertenecientes al tipo de campo)
 $usuario = filter_var($_POST['usuario'], FILTER_SANITIZE_STRING);
 $pass = md5($_POST['contrasenya']);
