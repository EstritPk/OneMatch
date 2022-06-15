<?php

include("functions/db.php");

function ingresar()
{
       

        

        header('Location:formulario_usuario.php');
}




    /*

     $sql="INSERT INTO usuarios SET nombre='".$_POST['frmnombre']."',
        appaterno='".$_POST['frmpaterno']."',
        apmaterno='".$_POST['frmmaterno']."',
        usuario='".$_POST['frmusuario']."',
        clave='".md5($_POST['frmclave'])."',
        estado=".$_POST['estado'].",
        fecha_creacion='".fechabd(fechahoy())."',
         hora_creacion='".hora()."',
         foto='".$_FILES['archivo']['name']."'";
        mysqli_query(conectar(),$sql);
            move_uploaded_file($_FILES['archivo']['tmp_name'],"images/fotos/".$_FILES['archivo']['name']);
    */







?>