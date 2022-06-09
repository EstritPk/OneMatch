<?php


session_start();

include("db.php");

$sql="select * from usuario where nombre_usuario= '" .$_POST['nombre_usu']. "' and clave_usuario='" .md5($_POST['clave']) "' and estado=1 "

?>