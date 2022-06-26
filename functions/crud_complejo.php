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
    $sql="INSERT INTO complejosdeportivos SET nombre_complejo='".$_POST['nombre_comp']."' , direccion_complejo='".$_POST['direccion_comp']."' , horario_complejo='".$_POST['horario_comp']."' , imagen_complejo='".$_FILES['admin_comp']['name']."' ,
    estado_complejo='".$_POST['estado_comp']."', adminsitradores_rut_admin='".$_POST['admin_comp']."'";
    mysqli_query(conectar(),$sql);
    if(move_uploaded_file($_FILES['admincomp']['tmp_name'],"../images/fotos/".$_FILES['admin_comp']['name']));

    header('Location:../home.php');
}

function modificar()
{
    $sql="UPDATE  complejosdeportivos SET nombre_complejo='".$_POST['nombre_comp']."' , direccion_complejo='".$_POST['direccion_comp']."' , horario_complejo='".$_POST['horario_comp']."' , imagen_complejo='".$_FILES['imagen_comp']['name']."' ,
    estado_complejo='".$_POST['estado_comp']."', adminsitradores_rut_admin='".$_POST['admin_comp']."' WHERE id_complejo=".$_POST['idcomple'];
    mysqli_query(conectar(),$sql);
    move_uploaded_file($_FILES['imagen_comp']['tmp_name'],"../images/fotos/".$_FILES['admin_comp']['name']);

    header('Location:../admin_canchas.php');
}

function eliminar()
{

}

function cancelar()
{

}
