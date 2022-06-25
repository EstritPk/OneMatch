<?php
include("db.php");

$op=$_POST['actionlogin'];
switch($op){
    case "Loguear": loguear();
        break;
    case "RegistrarSinLogin": registrarsinlogin();
        break;
}

    function loguear(){
        $sql="SELECT * FROM  usuarios where name_usuario='".$_POST['name_usu']."' , clave_usuario='".md5($_POST['clave_usu'])."' , estado_usuario=1 ";
        mysqli_query(conectar(),$sql);
        $cont=mysqli_num_rows($result);

        $datos=mysqli_fetch_array($result);

        while($datos=mysqli_fetch_array($result))
        {
            //header('Location:../home.php');
            header('Location:error.php');
        }

        //echo "Holanda";

        
    }

    function registrarsinlogin(){
        $sql="INSERT INTO usuarios SET rut_usuario='".$_POST['rut_usu']."' , nombre_usuario='".$_POST['nombre_usu']."' , email_usuario='".$_POST['email_usu']."' , clave_usuario='".md5($_POST['clave_usu'])."' , 
        name_usuario='".$_POST['name_usu']."' , apellido_p_usuario='".$_POST['ap_paterno_usu']."' , apellido_m_usuario='".$_POST['ap_materno_usu']."' , direccion_usuario='".$_POST['direccion_usu']."' , 
        edad_usuario='".$_POST['edad_usu']."' , telefono_usuario='".$_POST['telefono_usu']."' , identidad_usuario='".$_POST['identidad_usu']."' , descripcion_usuario='".$_POST['descripcion_usu']."' , 
        imagen_usuario='".$_FILES['images']['foto_usu']."' ";
        mysqli_query($conn,$sql);
        header('Location:../home.php');
    }

    
    

?>