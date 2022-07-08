<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include "functions/db.php";
if (isset($_SESSION['usu'])) {
    if (isset($_GET['idcancha'])) {
        $sql = "select * from canchas where id_cancha=" . $_GET['idcancha'];
        $resul = mysqli_query(conectar(), $sql);
        $datoscancha = mysqli_fetch_array($resul);
    }
    $sqlcomple = "SELECT * FROM complejosdeportivos where id_complejo=$datoscancha[complejosDeportivos_id_complejo]";
    $resulcomple = mysqli_query(conectar(), $sqlcomple);
    $datoscomple = mysqli_fetch_array($resulcomple);
?>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Detalle Canchas</title>
        <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://kit.fontawesome.com/b8c0c93cb3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/form.css">
    </head>

    <body>
        <div class="pt-5">
            <?php
            include "includes/header.php";
            ?>
        </div>




        <div class="row mt-3 form shadow-lg p-3 mb-1  rounded card">
            <div class="card-header text-center bg-info">
                <h5 class="">Detalles de la Cancha</h5>

            </div>
            <div class="row">
                <div class="col-12 col-sm-4">
                    <a href="#" class="block-20 d-flex align-items-start" style="background-image: url('images/fotos/<?php echo  $datoscancha['imagen_cancha']; ?>');">
                    </a>

                </div>
                <div class="col-12 col-sm-6">
                    <table class="table table-bordered border-info">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Datos</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Nombre</th>
                                <td><?php echo $datoscancha['nombre_cancha']; ?></td>


                            </tr>
                            <tr>
                                <th scope="row">Dimencion</th>
                                <td><?php echo $datoscancha['dimension_cancha'];
                                    ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Precio</th>
                                <td>$<?php echo $datoscancha['precio_cancha'];
                                        ?> x hora</td>
                            </tr>
                            <tr>
                                <th scope="row">Complejos deportivos</th>
                                <td><?php echo $datoscomple['nombre_complejo'];
                                    ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Direccion</th>
                                <td><?php echo $datoscomple['direccion_complejo'];;
                                    ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Horario</th>
                                <td><?php echo $datoscomple['horario_complejo'];;
                                    ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Estados</th>
                                <td>Disponible</td>
                            </tr>
                            <tr>
                                <th scope="row">Tipos de Cancha</th>
                                <td><?php echo $datoscancha['tipo_cancha'];
                                    ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>










        <div class="pt-5">
            <?php
            include "includes/footer.php";
            ?>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/main.js"></script>
        <!--<script type="text/javascript">
                function confimarEliminar(){
                   var respuesta=confirm("Estas Seguro que deseas eliminarlo");
                   if(respuesta==true) {
                    return true;
                   }else{
                    return false;
                   }
                }
            </script>-->
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>

</html>
<?php
} else {
    header("Location:index.php");
}
?>