<?php

//include("db.php");
$conn=mysqli_connect("localhost","root","root","onematch");


  
$sql="INSERT INTO equipos SET nombre_equipo='".$_POST['nombre_equ']."' , nomina_equipo='".$_POST['nomina_equ']."' , descripcion_equipo='".$_POST['descripcion_equ']."' ";

    //$sql="INSERT INTO equipos SET id_equipo='1',nombre_equipo='los panas',nomina_equipo=1,descripcion_equipo='Los pana mans',esatdo_equipo=1"; '".$_POST['frmusuario']."'
//$sql="INSERT INTO usuarios SET nombre='".$_POST['frmnombre']."',appaterno='".$_POST['frmpaterno']."',apmaterno='".$_POST['frmmaterno']."',usuario='".$_POST['frmusuario']."',clave='".md5($_POST['frmclave'])."',estado=".$_POST['estado'].",fecha_creacion='".fechabd(fechahoy())."', hora_creacion='".hora()."',foto='".$_FILES['archivo']['name']."'";

    mysqli_query($conn,$sql);

    header('Location:home.php');
        



?>

