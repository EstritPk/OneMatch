<?php
$sql="DELETE FROM equipos  WHERE nombre_equipo='".$_POST['nombre_equ']."' ";
mysqli_query($conn,$sql);
header('Location:../home.php');
?>