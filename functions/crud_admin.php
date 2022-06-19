<?php
$op=$_POST[''];
switch($op){
    case "Crear":crear();
        break;
    case "Modificar":modificar();
        break;
    case "Eliminar": eliminar();
        break;
    case "Cancelar":cancelar();
        break;
}

function crear()
{
    include("db.php");
    $conn=mysqli_connect("localhost","root","root","onematch");
    $sql="INSERT INTO administradores SET rut_admin='".$_POST['rut_adm']."' , name_administrador='".$_POST['name_adm']."' , apellido_p_administrador='".$_POST['ap_paterno_adm']."' , apellido_m_administrador='".$_POST['ap_materno_adm']."' ,
    clave_administrador='".$_POST['clave_adm']."' , direccion_administrador='".$_POST['direccion_adm']."' , email_administrador='".$_POST['emails_adm']."' , telefono_administrador='".$_POST['telefono_adm']."' ,
    identidad_administrador='".$_POST['identidad_adm']."' , imagen_administrador= '".$_FILES['images']['foto_adm']."' ";
    mysqli_query($conn,$sql);
    header('Location:../home.php');
}

function modificar()
{
    include("db.php");
    $conn=mysqli_connect("localhost","root","root","onematch");
    $sql="UPDATE administradores SET rut_admin='".$_POST['rut_adm']."' , name_administrador='".$_POST['name_adm']."' , apellido_p_administrador='".$_POST['ap_paterno_adm']."' , apellido_m_administrador='".$_POST['ap_materno_adm']."' ,
    clave_administrador='".$_POST['clave_adm']."' , direccion_administrador='".$_POST['direccion_adm']."' , email_administrador='".$_POST['emails_adm']."' , telefono_administrador='".$_POST['telefono_adm']."' ,
    identidad_administrador='".$_POST['identidad_adm']."' , imagen_administrador= '".$_FILES['images']['foto_adm']."' ";
    mysqli_query($conn,$sql);
    header('Location:../home.php');
}

function eliminar()
{
    $sql="DELETE FROM administradores  WHERE rut_admin='".$_POST['rut_adm']."' ";
    mysqli_query($conn,$sql);
    header('Location:../home.php');
}

function cancelar()
{

}

?>