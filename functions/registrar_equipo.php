<?php

include("functions/db.php");


if (isset($_POST['save_equ'])) {   
    $sql="INSERT INTO `equipos` (`id_equipo`, `nombre_equipo`, `nomina_equipo`, `descripcion_equipo`, `esatdo_equipo`, `imagen_equipo`, `deportes_id_deporte`) VALUES ('1',  '$nombre_equ' , '$nomina_equ', '$descripcion_equ', '1', '', '')";
    $result=mysqli_query($conn(),$sql);
    $result = mysqli_query($conn, $query);
    if(!$result) {
        die("Query Failed.");
    }
        
        
}
header('Location:home.php');

?>

