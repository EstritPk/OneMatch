<?php
include("db.php");

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
    $sql="INSERT INTO complejosdeportivos SET nombre_complejo='".$_POST['nombre_comp']."' , direccion_complejo='".$_POST['direccion_comp']."' , horario_complejo='".$_POST['horario_comp']."' , imagen_complejo='".$_FILES['imagen_comp']['name']."' ,
    estado_complejo='".$_POST['estado_comp']."', adminsitradores_rut_admin='".$_POST['admin_comp']."'";
    mysqli_query(conectar(),$sql);
    header('Location:../home.php');
}

function modificar()
{
    $sql="UPDATE INTO complejosdeportivos SET nombre_complejo='".$_POST['nombre_comp']."' , direccion_complejo='".$_POST['direccion_comp']."' , horario_complejo='".$_POST['horario_comp']."' , imagen_complejo='".$_FILES['imagen_comp']['name']."' ,
    estado_complejo='".$_POST['estado_comp']."', adminsitradores_rut_admin='".$_POST['admin_comp']."'";
    mysqli_query(conectar(),$sql);
    header('Location:../home.php');
}

function eliminar()
{

}

function cancelar()
{

}

?>
