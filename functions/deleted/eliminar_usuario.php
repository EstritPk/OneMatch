<?php
$sql="DELETE FROM usuarios  WHERE rut_usuario='".$_POST['rut_usu']."' ";
mysqli_query($conn,$sql);
header('Location:../home.php');
?>