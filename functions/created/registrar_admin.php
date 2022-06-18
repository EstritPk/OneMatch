<?php
include("db.php");
$conn=mysqli_connect("localhost","root","root","onematch");
$sql="INSERT INTO administradores SET rut_admin='".$_POST['rut_adm']."' , name_administrador='".$_POST['name_adm']."' , apellido_p_administrador='".$_POST['ap_paterno_adm']."' , apellido_m_administrador='".$_POST['ap_materno_adm']."' ,
clave_administrador='".$_POST['clave_adm']."' , direccion_administrador='".$_POST['direccion_adm']."' , email_administrador='".$_POST['emails_adm']."' , telefono_administrador='".$_POST['telefono_adm']."' ,
identidad_administrador='".$_POST['identidad_adm']."' , imagen_administrador= '".$_FILES['images']['foto_adm']."' ";
mysqli_query($conn,$sql);
header('Location:../home.php');

/*
rut_usuario='".$_POST['rut_usu']."' , nombre_usuario='".$_POST['nombre_usu']."' , email_usuario='".$_POST['email_usu']."' , clave_usuario='".$_POST['clave_usu']."' , 
name_usuario='".$_POST['name_usu']."' , apellido_p_usuario='".$_POST['ap_paterno']."' , apellido_m_usuario='".$_POST['ap_materno']."' , direccion_usuario='Avenida siempre viva 742' , 
edad_usuario='".$_POST['edad_usu']."' , telefono_usuario='".$_POST['telefono_usu']."' , identidad_usuario='".$_POST['identidad_usu']."' , descripcion_usuario='".$_POST['descripcion_usu']."' 

rut_admin
name_administrador
apellido_p_administrador
apellido_m_administrador
clave_administrador
direccion_administrador
email_administrador
telefono_administrador
identidad_administrador
imagen_administrador
estado_administrador
*/

?>