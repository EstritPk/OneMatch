<?php
include("db.php");
$conn=mysqli_connect("localhost","root","root","onematch");
$sql="UPDATE equipos SET nombre_equipo='".$_POST['nombre_equ']."' , nomina_equipo='".$_POST['nomina_equ']."' , descripcion_equipo='".$_POST['descripcion_equ']."' , deportes_id_deporte='".$_POST['deporte_equ']."' ";
mysqli_query($conn,$sql);
header('Location:../home.php');
?>