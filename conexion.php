<?php
//Declarar funcion que devuelva la conexion a la bd
function conectar(){
        $conn = pg_connect("host=127.0.0.1 port=5432 dbname=segundoexamenbd user=alta_usuario password=holamundo");
        return $conn;
}
?>

