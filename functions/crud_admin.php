<?php
include("db.php");

if(isset($_GET['deleteusuario']))
{
    $sql="UPDATE administradores SET estado_administrador=2 WHERE rut_admin=".$_GET['deleteusuario'];
        mysqli_query(conectar(),$sql);
        header('Location:../cerrar_sesion.php');
}
   
$op=$_POST['actionadmin'];
switch($op){
    case "Crear": crear();
        break;
    case "Modificar": modificar();
        break;
    case "Eliminar": eliminar();
        break;
    case "Cancelar":cancelar();
        break;
}

function crear()
{
    $conn=mysqli_connect("localhost","root","root","onematch");
    $sql="INSERT INTO adminsitradores SET rut_admin='".$_POST['rut_adm']."' , name_administrador='".$_POST['name_adm']."' , apellido_p_administrador='".$_POST['ap_paterno_adm']."' , edad_administrador='".$_POST['edad_adm']."' , 
    apellido_m_administrador='".$_POST['ap_materno_adm']."' , clave_administrador='".md5($_POST['clave_adm'])."' , direccion_administrador='".$_POST['direccion_adm']."' , email_administrador='".$_POST['email_adm']."' , 
    telefono_administrador='".$_POST['telefono_adm']."' , identidad_administrador='".$_POST['identidad_adm']."' , estado_administrador=1 , imagen_administrador='".$_FILES['imagen_adm']['name']."' ";

    mysqli_query($conn,$sql);
    move_uploaded_file($_FILES['imagen_adm']['name'],"../images/fotos/".$_FILES['imagen_adm']['name']);

    header('Location:../home.php');
}

function modificar()
{
    $conn=mysqli_connect("localhost","root","root","onematch");
    $sql="UPDATE administradores SET rut_admin='".$_POST['rut_adm']."' , name_administrador='".$_POST['name_adm']."' , apellido_p_administrador='".$_POST['ap_paterno_adm']."' , apellido_m_administrador='".$_POST['ap_materno_adm']."' ,
    clave_administrador='".md5($_POST['clave_adm'])."' , direccion_administrador='".$_POST['direccion_adm']."' , email_administrador='".$_POST['email_adm']."' , telefono_administrador='".$_POST['telefono_adm']."' ,
    identidad_administrador='".$_POST['identidad_adm']."' , edad_administrador='".$_POST['edad_adm']."' , imagen_administrador='".$_FILES['imagen_adm']['name']."' WHERE rut_admin=".$_POST['rutadmin'];
    move_uploaded_file($_FILES['imagen_adm']['name'],"../images/fotos/".$_FILES['imagen_adm']['name']);

    mysqli_query(conectar(),$sql);
    header('Location:../home.php');
    
}

function eliminar()
{
    $sql="DELETE FROM administradores  WHERE rut_admin='".$_POST['rut_adm']."' ";

    mysqli_query(conectar(),$sql);
    header('Location:../home.php');
}

function cancelar()
{
    header('Location:../home.php'); 
}

?>