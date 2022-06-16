<?php
include("db.php");
$conn=mysqli_connect("localhost","root","root","onematch");
$sql="INSERT INTO usuarios SET rut_usuario='".$_POST['rut_usu']."' , nombre_usuario='".$_POST['nombre_usu']."' , email_usuario='".$_POST['email_usu']."' , clave_usuario='".$_POST['clave_usu']."' , 
name_usuario='".$_POST['name_usu']."' , apellido_p_usuario='".$_POST['ap_paterno_usu']."' , apellido_m_usuario='".$_POST['ap_materno_usu']."' , direccion_usuario='Avenida siempre viva 742' , 
edad_usuario='".$_POST['edad_usu']."' , telefono_usuario='".$_POST['telefono_usu']."' , identidad_usuario='".$_POST['identidad_usu']."' , descripcion_usuario='".$_POST['descripcion_usu']."' ";
mysqli_query($conn,$sql);
header('Location:../home.php');

/*
rut_usuario
nombre_usuario
email_usuario
clave_usuario
name_usuario
apellido_p_usuario
apellido_m_usuario
direccion_usuario
edad_usuario
telefono_usuario
identidad_usuario
descripcion_usuario
imagen_usuario
estado_usuario
*/








?>