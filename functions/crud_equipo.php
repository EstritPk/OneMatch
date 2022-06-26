<?php
include("db.php");
if(isset($_GET['equipoeli']))
{
    $sql="UPDATE  equipos SET  estado_equipo=2 WHERE id_equipo=".$_GET['equipoeli'];
        mysqli_query(conectar(),$sql);
        header('Location:../equipos_usu.php');
}




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
    
   $sql="INSERT INTO equipos SET nombre_equipo='".$_POST['nombre_equ']."' , creador_equipo='".$_POST['creador_equ']."' , tipo_equipo='".$_POST['tipo_equ']."' , descripcion_equipo='".$_POST['descripcion_equ']."' , 
    deportes_id_deporte='".$_POST['deporte_equ']."',estado_equipo=1,imagen_equipo='".$_FILES['imagen_equi']['name']."'";
    
    move_uploaded_file($_FILES['imagen_equi']['tmp_name'],"../images/fotos/".$_FILES['imagen_equi']['name']);
    mysqli_query(conectar(),$sql);
    header('Location:../equipos_usu.php');
}

function modificar()
{
    
    $sql="UPDATE equipos SET nombre_equipo='".$_POST['nombre_equ']."' , creador_equipo='".$_POST['creador_equ']."' , tipo_equipo='".$_POST['tipo_equ']."' , descripcion_equipo='".$_POST['descripcion_equ']."' , 
    deportes_id_deporte='".$_POST['deporte_equ']."',estado_equipo=1,imagen_equipo='".$_FILES['imagen_equi']['name']."'WHERE id_equipo=".$_POST['idequipo'] ;
    mysqli_query(conectar(),$sql);
    move_uploaded_file($_FILES['imagen_equi']['tmp_name'],"../images/fotos/".$_FILES['imagen_equi']['name']);
    
    header('Location:../equipos_usu.php');
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