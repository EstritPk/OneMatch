<?php
include("db.php");
   
$op=$_POST['actiones'];
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
    $sql="INSERT INTO adminsitradores SET rut_admin='".$_POST['rut_adm']."' , name_administrador='".$_POST['name_adm']."' , apellido_p_administrador='".$_POST['ap_paterno_adm']."' , 
    apellido_m_administrador='".$_POST['ap_materno_adm']."' , clave_administrador='".md5($_POST['clave_adm'])."' , direccion_administrador='".$_POST['direccion_adm']."' , email_administrador='".$_POST['email_adm']."' , 
    telefono_administrador='".$_POST['telefono_adm']."' , identidad_administrador='".$_POST['identidad_adm']."' , imagen_administrador='".$_FILES['imagen_adm']['name']."' ";

    mysqli_query($conn,$sql);
    header('Location:../home.php');
}

function modificar()
{
    $conn=mysqli_connect("localhost","root","root","onematch");
    $sql="UPDATE administradores SET rut_admin='".$_POST['rut_adm']."' , name_administrador='".$_POST['name_adm']."' , apellido_p_administrador='".$_POST['ap_paterno_adm']."' , apellido_m_administrador='".$_POST['ap_materno_adm']."' ,
    clave_administrador='".md5($_POST['clave_adm'])."' , direccion_administrador='".$_POST['direccion_adm']."' , email_administrador='".$_POST['email_adm']."' , telefono_administrador='".$_POST['telefono_adm']."' ,
    identidad_administrador='".$_POST['identidad_adm']."' , imagen_administrador='".$_FILES['images']['imagen_adm']."' WHERE rut_admin=".$_POST['rut_adm'];
    move_uploaded_file($_FILES['imagen_adm']['tmp_name'],"../images/fotos/".$_FILES['imagen_adm']['name']);

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
    header('Location:../home.php'); 
}

?>