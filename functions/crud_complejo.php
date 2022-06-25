<?php
include("db.php");

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
    $conn=mysqli_connect("localhost","root","root","onematch");
    $sql="INSERT INTO complejosdeportivos SET nombre_complejo='".$_POST['nombre_comp']."' , direccion_complejo='".$_POST['direccion_comp']."' , horario_complejo='".$_POST['horario_comp']."' , imagen_complejo='".$_POST['imagen_comp']."' ,
    estado_complejo='".$_POST['estado_comp']."' , administradores_rut_admin='".$_POST['admin_comp']."'    ";
    mysqli_query($conn,$sql);
    header('Location:../home.php');
}

function modificar()
{

}

function eliminar()
{

}

function cancelar()
{

}

/*
id_complejo
nombre_complejo
direccion_complejo
horario_complejo
imagen_complejo
estado_complejo
administradores_rut_admin
*/

?>
rut_usuario='".$_POST['rut_usu']."' , nombre_usuario='".$_POST['nombre_usu']."' , email_usuario='".$_POST['email_usu']."' , clave_usuario='".md5($_POST['clave_usu'])."' , 
    name_usuario='".$_POST['name_usu']."' , apellido_p_usuario='".$_POST['ap_paterno_usu']."' , apellido_m_usuario='".$_POST['ap_materno_usu']."' , direccion_usuario='".$_POST['direccion_usu']."' , 
    edad_usuario='".$_POST['edad_usu']."' , telefono_usuario='".$_POST['telefono_usu']."' , identidad_usuario='".$_POST['identidad_usu']."' , descripcion_usuario='".$_POST['descripcion_usu']."' , 
    imagen_usuario='".$_FILES['images']['foto_usu']."' ";