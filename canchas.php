<?php
session_start();

include "functions/db.php";

if (isset($_SESSION['usu'])) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Las Canchas</title>
        <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://kit.fontawesome.com/b8c0c93cb3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/form.css">
    </head>


    <!-- DEBO HACER CRUD -->

    <body>
        <div class="pt-5">
            <?php
            include "includes/header.php";
            ?>
        </div>
        <div class="container ">
            <div class="row ">
                <div class="col">
                    <div class="carousel slide carousel-fade" id="mi-carousel" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="img-fluid" src="images/foot.jpg" alt="">
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">
                                <div class="carousel-caption">
                                    <h5>Titulo de mi articulo</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, hic.</p>
                                </div>
                                <img class="img-fluid" src="images/nba01.jpg" alt="">
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="images/ipadel.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controles -->
                        <button class="carousel-control-prev " type="button" data-bs-target="#mi-carousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#mi-carousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Siguiente</span>
                        </button>

                        <!-- Indicadores -->
                        <div class="carousel-indicators">
                            <button type="button" class="active" data-bs-target="#mi-carousel" data-bs-slide-to="0" aria-label="Slide 1"></button>
                            <button type="button" class="" data-bs-target="#mi-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" class="" data-bs-target="#mi-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row py-5">
            <div class="col">
                <div class="border-bottom">
                    <h3 class="text-dark text-center">Nuestro Canchas</h3>
                </div>
            </div>
        </div>


        <div class="  row  justify-content-center">
            <div class="row ">


                <?php
                $sqlpro = "SELECT * FROM canchas where estado_cancha=1";
                $resultpro = mysqli_query(conectar(), $sqlpro);
                while ($datospro = mysqli_fetch_array($resultpro)) {
                ?>
                    <?php
                    $sqlcomple = "SELECT * FROM complejosdeportivos where id_complejo=$datospro[complejosDeportivos_id_complejo]";
                    $resulcomple = mysqli_query(conectar(), $sqlcomple);
                    $datoscomple = mysqli_fetch_array($resulcomple);
                    ?>

                    <div class="col-6 col-sm-6 col-lg-3 mb-4">
                        <div class="card" style="width: 100%;">
                            <a href="#" class="block-20 d-flex align-items-start" style="background-image: url('images/fotos/<?php echo $datospro['imagen_cancha']; ?>');">
                            </a>

                            <div class="card-body">

                                <h4 class="card-title">cancha <?php echo $datospro['nombre_cancha']; ?></h4>
                                <p class="card-text "><?php echo $datospro['dimension_cancha']; ?>,
                                    <?php echo $datoscomple['direccion_complejo'];; ?>, Complejos <?php echo $datoscomple['nombre_complejo']; ?> </p>
                                <p class="ml-auto meta2 m-3">
                                    <a href="#" class="mr-2">Precio</a>
                                    <a href="#" class="meta-chat"><?php echo $datospro['precio_cancha']; ?> x hora</a>
                                </p>
                                <p><a href="form_reservas.php?can_reserva=<?php echo $datospro['id_cancha']; ?>" class="btn btn-sm btn-info">Reservar</a>
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

       
        </div>

        </div>







        <div class="pt-5">

            <?php
            include "includes/footer.php";
            ?>
        </div>


        <script>
            function recibir() {
                var valor = document.getElementById("texto").value;
                document.getElementById("codigo").value = valor;

            }


    
            // })
        </script>

        <script src="js/jquery.min.js"></script>
        <script src="js/popper.js"></script>

        <script src="js/owl.carousel.min.js"></script>
        <script src="js/main.js"></script>

        <script src="js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
<?php
} else {
    header("Location:index.php");
}
?>