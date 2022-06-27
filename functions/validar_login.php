<?php
include("db.php");
$op = $_POST['actionlogin'];
switch ($op) {
    case "ingresar como Usuario":
        validarUsuari();
        break;
    case "ingresar como Aministrador":
        validarAdmin();
        break;
}
function validarUsuari()
{
    session_start();
    $sql = "select * from usuarios where email_usuario='" .$_POST['email']. "' and clave_usuario='" .md5($_POST['clave']). "' and estado_usuario=1";
    $result = mysqli_query(conectar(), $sql);
    $cont = mysqli_num_rows($result);
    $datos = mysqli_fetch_array($result);
    if ($cont != 0) {
        $_SESSION['usu'] =$datos['nombre_usuario']." ".$datos['apellido_p_usuario'] ;
        $_SESSION['user']="usuario ";
        $_SESSION['rut']=$datos['rut_usuario'];

        header("Location:../home.php");
    } else {
        header("Location:error.php");

    }
}
function validarAdmin()
{   
    session_start();
    $sql = "select * from adminsitradores where email_administrador='" .$_POST['email']. "' and clave_administrador='" .md5($_POST['clave']). "' and estado_administrador=1";
    $result = mysqli_query(conectar(), $sql);
    $cont = mysqli_num_rows($result);
    $datos = mysqli_fetch_array($result);
    if ($cont != 0) {
         $_SESSION['usu'] =$datos['name_administrador']." ".$datos['apellido_p_administrador'] ;
         $_SESSION['admin'] = "Admin0000";
         $_SESSION['rut']=$datos['rut_admin'];
        header("Location:../home.php");
    } else {
        header("Location:error.php");
    }
}
