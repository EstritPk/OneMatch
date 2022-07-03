<?php
include("db.php");


if(isset($_GET['cancelar']))
{
    $sql="DELETE FROM reservas WHERE folio_reserva=".$_GET['cancelar'];
        mysqli_query(conectar(),$sql);
        header('Location:../usuario_reservas.php');
}
$op=$_POST['actionreserva'];
switch($op){
    case "Reservar": reservar();
        break;
    case "Modificar": modificar();
        break;
    case "Eliminar": eliminar();
        break;
    case "Cancelar":cancelar();
        break;
}

function  reservar()
{
    
   $sql="INSERT INTO reservas SET fecha_reserva='".fechaesp($_POST['fecha_reser'])."' , fecha_emitida_reserva='".fechaesp(fechahoy())."' , cantidad_hora_reserva='".$_POST['cantidad']."' , usuarios_rut_usuario='".$_POST['rut_usu']."' , 
   canchas_id_cancha='".$_POST['Id_cancha']."', monto_total='".$_POST['monto']."',estado_reserva=0";
    
    mysqli_query(conectar(),$sql);
    header('Location:../usuario_reservas.php');
}

function modificar()
{
    
    $sql="UPDATE reservas SET  fecha_reserva='".fechaesp($_POST['fecha_reser'])."' , fecha_emitida_reserva='".fechaesp(fechahoy())."' , cantidad_hora_reserva='".$_POST['cantidad']."' , usuarios_rut_usuario='".$_POST['rut_usu']."' , 
    canchas_id_cancha='".$_POST['Id_cancha']."', monto_total='".$_POST['monto']."'WHERE folio_reserva=".$_POST['folio'];
      mysqli_query(conectar(),$sql);
  
    header('Location:../usuario_reservas.php');
}

function eliminar()

{
    echo "buenooooooooooo";
    // $sql="DELETE FROM equipos  WHERE nombre_equipo='".$_POST['nombre_equ']."' ";
    // mysqli_query(conectar(),$sql);
    // header('Location:../home.php');
}

function cancelar()
{
    header('Location:../home.php');
}

?>
?>