
<?php
include("db.php");

$op=$_POST['actiones'];
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

}

function modificar()
{
    $sql="UPDATE canchas SET precio_cancha='".$_POST['precio']."',horario_cancha='".$_POST['horario']."',tipo_cancha='".$_POST['deportes']."',
    dimension_cancha='".$_POST['dimension']."',estado_cancha=".$_POST['estado'].",imagen_cancha='".$_FILES['foto']['name']."' WHERE id_cancha=".$_POST['idcancha'];
    move_uploaded_file($_FILES['foto']['tmp_name'],"../images/fotos/".$_FILES['foto']['name']);

    mysqli_query(conectar(),$sql);
    header('Location:../admin_canchas.php');
}

function eliminar()
{

}

function cancelar()
{

}

?>