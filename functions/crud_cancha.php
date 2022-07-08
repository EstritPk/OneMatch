
<?php
include("db.php");



if(isset($_GET['ideliminar']))
{
    $sql="DELETE FROM canchas WHERE id_cancha=".$_GET['ideliminar'];
        mysqli_query(conectar(),$sql);
        header('Location:../admin_canchas.php');
}

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
    $sql="INSERT INTO canchas SET precio_cancha='".validarCaracteres($_POST['precio_can'])."' , horario_cancha='".validarCaracteres($_POST['horario_can'])."' , 
    complejosDeportivos_id_complejo='".validarCaracteres($_POST['complejos_can'])."' , tipo_cancha='".validarCaracteres($_POST['deportes_can'])."' , dimension_cancha='".validarCaracteres($_POST['dimension_can'])."' , 
    estado_cancha=".$_POST['estado_can']." , nombre_cancha='".validarCaracteres($_POST['nombre_can'])."' ,  imagen_cancha='".$_FILES['imagen_can']['name']."'";
    
    mysqli_query(conectar(),$sql);
    move_uploaded_file($_FILES['imagen_can']['tmp_name'],"../images/fotos/".$_FILES['imagen_can']['name']);

    header('Location:../admin_canchas.php');

}

function modificar()
{
    $sql="UPDATE canchas SET precio_cancha='".validarCaracteres($_POST['precio'])."' , horario_cancha='".validarCaracteres($_POST['horario'])."' , tipo_cancha='".validarCaracteres($_POST['deportes'])."',
    dimension_cancha='".validarCaracteres($_POST['dimension'])."' , estado_cancha=".validarCaracteres($_POST['estado'])." , imagen_cancha='".validarCaracteres($_FILES['foto']['name'])."' WHERE id_cancha=".$_POST['idcancha'];
    move_uploaded_file($_FILES['foto']['tmp_name'],"../images/fotos/".$_FILES['foto']['name']);

    mysqli_query(conectar(),$sql);
    header('Location:../admin_canchas.php');
}

function eliminar()
{
 echo "buenooooooooooo";
}

function cancelar()
{

}

?>