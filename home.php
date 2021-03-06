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
        <title>Inicio</title>
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
                        <button class="carousel-control-prev" type="button" data-bs-target="#mi-carousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#mi-carousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Siguiente</span>
                        </button>
                        <div class="carousel-indicators">
                            <button type="button" class="active" data-bs-target="#mi-carousel" data-bs-slide-to="0" aria-label="Slide 1"></button>
                            <button type="button" class="" data-bs-target="#mi-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" class="" data-bs-target="#mi-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="main mt-2">
            <section class="caracteristicas bg-info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="titulo">Nuestros Servicios</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 caracteristica">
                            <img src="images/reserva.png" alt="" class="icono">
                            <h4 class="primera_linea">Reservar Canchas</h4>
                            <a href="admin_canchas.php" class="btn-outline-info"></a>
                            <p class="parrafo">Dolor sit amet, consectetur adipiscing elit. In dignissim odio ut sagittis elementum.</p>
                        </div>
                        <div class="col-sm-4 caracteristica">
                            <img src="images/arena.png" alt="" class="icono">
                            <h4 class="primera_linea">Registrar sus Complejos</h4>
                            <p class="parrafo">Curabitur nisi enim, placerat ac convallis id, posuere vehicula ligula.</p>
                        </div>
                        <div class="col-sm-4 caracteristica">
                            <img src="images/disparar.png" alt="" class="icono">
                            <h4 class="primera_linea">OneMacth</h4>
                            <p class="parrafo">Nulla diam mi, pharetra eget mattis sed, mollis non ligula.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="ftco-section bg-secondary  p-2 mb-3 ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="heading-section mb-3 text-light pb-md-2">Complejos Deportivos</h2>
                        </div>
                        <div class="col-md-12 ite">
                            <div class="featured-carousel owl-carousel">
                                <?php
                                $sqlcomple = "select * from complejosdeportivos where  estado_complejo=1";
                                // $sqlcomple = "SELECT * FROM complejosdeportivos WHERE estado_complejo=1";
                                $resulcomple = mysqli_query(conectar(), $sqlcomple);
                                while ($datoscomple = mysqli_fetch_array($resulcomple)) {
                                ?>
                                    <div class="item ">
                                        <div class="blog-entry">
                                            <a href="#" class="block-20 d-flex align-items-start" style="background-image: url('images/fotos/<?php echo $datoscomple['imagen_complejo']; ?>');">
                                            </a>
                                            <div class="text border border-top-0 p-4">
                                                <h5 class="heading"><a href="#"><?php echo $datoscomple['nombre_complejo']; ?></a></h5>
                                                <div class="d-flex align-items-center mt-4">
                                                    <p class="mb-0"><a href="detalles_complejo.php?idcomplejo=<?php echo $datoscomple['id_complejo']; ?>" class="btn btn-info">Ver mas<span class="ion-ios-arrow-round-forward"></span></a></p>
                                                    <p class="ml-auto meta2 mb-0">
                                                        <a href="#" class="mr-2"><?php echo $datoscomple['direccion_complejo']; ?></a>
                                                        <a href="#" class="meta-chat"><span class="ion-ios-chatboxes"></span> 3</a>
                                                    </p>
                                                </div>
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
            </section>
            <div class="pt-5">
                <?php
                include "includes/footer.php";
                ?>
            </div>
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