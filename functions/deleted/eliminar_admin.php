<?php
$sql="DELETE FROM administradores  WHERE rut_admin='".$_POST['rut_adm']."' ";
mysqli_query($conn,$sql);
header('Location:../home.php');
?>