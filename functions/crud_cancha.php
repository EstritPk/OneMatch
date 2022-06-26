
<?php
include("db.php");

$op=$_POST['actiones'];
switch($op){
    case "Crear": crear();
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
    $sql="INSERT INTO canchas SET precio_cancha='".$_POST['precio_can']."' , horario_cancha='".$_POST['horario_can']."' , complejosDeportivos_id_complejo='".$_POST['complejos_can']."' , tipo_cancha='".$_POST['deportes_can']."' ,
    dimension_cancha='".$_POST['dimension_can']."' , estado_cancha=".$_POST['estado_can']." , ";

    mysqli_query(conectar(),$sql);
    header('Location:../admin_canchas.php');

}

function modificar()
{
    $sql="UPDATE canchas SET precio_cancha='".$_POST['precio_can']."' , horario_cancha='".$_POST['horario_can']."' , tipo_cancha='".$_POST['deportes_can']."' , 
    dimension_cancha='".$_POST['dimension_can']."' , estado_cancha=".$_POST['estado_can']." , imagen_cancha='".$_FILES['imagen_can']['name']."' WHERE id_cancha=".$_POST['idcancha'];
    move_uploaded_file($_FILES['imagen_can']['tmp_name'],"../images/fotos/".$_FILES['imagen_can']['name']);

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