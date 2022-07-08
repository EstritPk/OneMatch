<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include "functions/db.php";
if (isset($_SESSION['usu'])) {
    if (isset($_GET['idcomplejo'])) {
        $sqlcomple = "select * from complejosdeportivos where id_complejo=" . $_GET['idcomplejo'];
        $resulcomple = mysqli_query(conectar(), $sqlcomple);
        $datoscomple = mysqli_fetch_array($resulcomple);
    }

?>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Las Canchas</title>
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
        <section class="header2">
            <div class="container">
                <div class="row contenedor_logo_menu">
                    <div class="logo col-xs-12 col-md-6">
                        <a href="#"><img src="images/complejologo.png" alt=""></a>
                    </div>
                </div>
                <div class="row textos">
                    <div class="col-md-12">
                        <h2 class="primera_linea"><?php echo $datoscomple['nombre_complejo']; ?></h2>
                        <h3 class="segunda_linea">"Los campeones siguen jugando hasta que lo hacen bien".</h3>

                    </div>
                </div>
            </div>
        </section>

        </div>

        <div class="  row   m-4">
            <div class="row ">

                <?php
                $sqlpro = "select * from canchas where complejosDeportivos_id_complejo='" . $datoscomple['id_complejo'] . "'  and estado_cancha=1";
                //$sqlpro = "SELECT * FROM canchas where estado_cancha=1";
                $resultpro = mysqli_query(conectar(), $sqlpro);
                while ($datospro = mysqli_fetch_array($resultpro)) {
                ?>
                    <div class="col-6 col-sm-6 col-lg-3 mb-4">
                        <div class="card" style="max-width: 19rem;">
                            <a href="#" class="block-20 d-flex align-items-start" style="background-image: url('images/fotos/<?php echo $datospro['imagen_cancha']; ?>');">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">Cancha <?php echo $datospro['nombre_cancha']; ?></h4>
                                <p class="card-text "><?php echo $datospro['dimension_cancha']; ?>,
                                    <?php echo $datoscomple['direccion_complejo']; ?>, Complejos <?php echo $datoscomple['nombre_complejo']; ?> </p>
                                <p class="ml-auto meta2 m-3">
                                    <a href="#" class="mr-2">Precio</a>
                                    <a href="#" class="meta-chat"><?php echo $datospro['precio_cancha']; ?> x hora</a>
                                </p>
                                <p>
                                <?php
						if (isset($_SESSION['user'])) {
						?>
							<a href="form_reservas.php?can_reserva=<?php echo $datospro['id_cancha']; ?>" class="btn btn-sm btn-info">Reservar</a>
						<?php
						}
						?>
                                    
                                    <a href="detalle_cancha.php?idcancha=<?php echo $datospro['id_cancha']; ?>" class="btn btn-sm btn-secondary">Detalles</a>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>


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
        <script type="text/javascript">
            function confimarEliminar() {
                var respuesta = confirm("Estas Seguro que deseas eliminarlo");
                if (respuesta == true) {
                    return true;
                } else {
                    return false;
                }
            }
        </script>
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>

</html>
<?php
} else {
    header("Location:index.php");
}
?>