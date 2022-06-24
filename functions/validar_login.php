<?php
session_start();

include("db.php");

$sql="SELECT * FROM  usuarios where name_usuario='".$_POST['name_usu']."' and clave_usuario='".md5($_POST['clave_usu'])."' and estado_usuario=1 ";
$result=mysqli_query(conectar(),$sql);
$cont=mysqli_num_rows($result);

$datos=mysqli_fetch_array($result);

//header('Location:../home.php');

if($cont==0)
{
    $_SESSION['user']=$datos['nombre_usuario']." ".$datos['apellido_p_usuario']." ".$datos['apellido_m_usuario'];
    header('Location:../home.php');
    
}else{
    header('Location:../index.php');
}

?>