<?php
include("db.php");

if(isset($_GET['compleli']))
{
    $sql="UPDATE  complejosdeportivos SET  estado_complejo=2 WHERE id_complejo=".$_GET['compleli'];
        mysqli_query(conectar(),$sql);
        header('Location:../admin_canchas.php');
}

$op=$_POST['actioncomp'];
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
    $sql="INSERT INTO complejosdeportivos SET nombre_complejo='".validarCaracteres($_POST['nombre_comp'])."' , direccion_complejo='".validarCaracteres($_POST['direccion_comp'])."' , 
    horario_complejo='".validarCaracteres($_POST['horario_comp'])."' , imagen_complejo='".$_FILES['imagen_comple']['name']."' , estado_complejo='".validaCaracteres($_POST['estado_comp'])."', 
    adminsitradores_rut_admin='".validarCaracteres($_POST['admin_comp'])."'";
    mysqli_query(conectar(),$sql);
    if(move_uploaded_file($_FILES['imagen_comple']['tmp_name'],"../images/fotos/".$_FILES['imagen_comple']['name']));

    header('Location:../home.php');
}

function modificar()
{
    $sql="UPDATE  complejosdeportivos SET nombre_complejo='".validarCaracteres($_POST['nombre_comp'])."' , direccion_complejo='".validarCaracteres($_POST['direccion_comp'])."' , 
    horario_complejo='".validarCaracteres($_POST['horario_comp'])."' , imagen_complejo='".validarCaracteres($_FILES['imagen_comple']['name'])."' , estado_complejo='".validarCaracteres($_POST['estado_comp'])."', 
    adminsitradores_rut_admin='".validarCaracteres($_POST['admin_comp'])."' WHERE id_complejo=".$_POST['idcomple'];
    mysqli_query(conectar(),$sql);
    move_uploaded_file($_FILES['imagen_comple']['tmp_name'],"../images/fotos/".$_FILES['imagen_comple']['name']);

    header('Location:../admin_canchas.php');
}

function eliminar()
{

}

function cancelar()
{

}
