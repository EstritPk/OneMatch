<?php
include("db.php");

if(isset($_GET['deleteusuario']))
{
    $sql="UPDATE usuarios SET estado_usuario=2 WHERE rut_usuario=".$_GET['deleteusuario'];
        mysqli_query(conectar(),$sql);
        header('Location:../cerrar_sesion.php');
}
   
$op=$_POST['actionusuario'];
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
    $sql="INSERT INTO usuarios SET rut_usuario='".validarCaracteres($_POST['rut_usu'])."' , nombre_usuario='".validarCaracteres($_POST['nombre_usu'])."' , email_usuario='".validarCaracteres($_POST['email_usu'])."' , 
    clave_usuario='".validarCaracteres(md5($_POST['clave_usu']))."' , name_usuario='".validarCaracteres($_POST['name_usu'])."' , apellido_p_usuario='".validarCaracteres($_POST['ap_paterno_usu'])."' , 
    apellido_m_usuario='".validarCaracteres($_POST['ap_materno_usu'])."' , direccion_usuario='".validarCaracteres($_POST['direccion_usu'])."' , edad_usuario='".validarCaracteres($_POST['edad_usu'])."' , 
    telefono_usuario='".validarCaracteres($_POST['telefono_usu'])."' , identidad_usuario='".validarCaracteres($_POST['identidad_usu'])."' , descripcion_usuario='".validarCaracteres($_POST['descripcion_usu'])."' , 
    estado_usuario=1 , imagen_usuario='".validarCaracteres($_FILES['imagen_usu']['name'])."' ";

    mysqli_query($conn,$sql);
    move_uploaded_file($_FILES['imagen_usu']['tmp_name'],"../images/fotos/".$_FILES['imagen_usu']['name']);

    header('Location:../home.php');
}

function modificar()
{
    $conn=mysqli_connect("localhost","root","root","onematch");
    $sql="UPDATE usuarios SET  nombre_usuario='".validarCaracteres($_POST['nombre_usu'])."' , email_usuario='".validarCaracteres($_POST['email_usu'])."' , 
    name_usuario='".validarCaracteres($_POST['name_usu'])."' , apellido_p_usuario='".validarCaracteres($_POST['ap_paterno_usu'])."' , apellido_m_usuario='".validarCaracteres($_POST['ap_materno_usu'])."' , direccion_usuario='".validarCaracteres($_POST['direccion_usu'])."' , 
    edad_usuario='".validarCaracteres($_POST['edad_usu'])."' , telefono_usuario='".validarCaracteres($_POST['telefono_usu'])."' , identidad_usuario='".validarCaracteres($_POST['identidad_usu'])."' , descripcion_usuario='".validarCaracteres($_POST['descripcion_usu'])."' , 
    imagen_usuario='".validarCaracteres($_FILES['imagen_usu']['name'])."' WHERE rut_usuario= '".$_POST['rutusuario']. "'";
    move_uploaded_file($_FILES['imagen_usu']['tmp_name'],"../images/fotos/".$_FILES['imagen_usu']['name']);

    mysqli_query($conn,$sql);
    header('Location:../home.php');
    
}

function eliminar()
{
    
}

function cancelar()
{
    header('Location:../home.php');
}


?>