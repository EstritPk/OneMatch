<?php
include("db.php");
$op=$_POST['actionequipo'];
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
   //$sql="INSERT INTO equipos SET nombre_equipo='".$_POST['nombre_equ']."' , nomina_equipo='".$_POST['nomina_equ']."' , descripcion_equipo='".$_POST['descripcion_equ']."' , deportes_id_deporte='".$_POST['deporte_equ']."' ";
    $sql="INSERT INTO equipos SET nombre_equipo='".$_POST['nombre_equ']."' , creador_equipo='".$_POST['creador_equ']."' , tipo_equipo='".$_POST['tipo_equ']."' , descripcion_equipo='".$_POST['descripcion_equ']."' , 
    deportes_id_deporte='".$_POST['deporte_equ']."' ";
    mysqli_query($conn,$sql);
    header('Location:../home.php');
}

function modificar()
{
    
    $sql="UPDATE equipos SET nombre_equipo='".$_POST['nombre_equ']."' , nomina_equipo='".$_POST['nomina_equ']."' , descripcion_equipo='".$_POST['descripcion_equ']."' , deportes_id_deporte='".$_POST['deporte_equ']."' ";
    mysqli_query(conectar(),$sql);
    header('Location:../home.php');
}

function eliminar()
{
    $sql="DELETE FROM equipos  WHERE nombre_equipo='".$_POST['nombre_equ']."' ";
    mysqli_query(conectar(),$sql);
    header('Location:../home.php');
}

function cancelar()
{
    header('Location:../home.php');
}

?>