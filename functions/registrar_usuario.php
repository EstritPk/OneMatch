<?php
include('db.php');


    $query = "INSERT INTO usuarios(rut_usuario) VALUES ('$_rut_usu')";

header ('Location:form_usuario.php');
?>