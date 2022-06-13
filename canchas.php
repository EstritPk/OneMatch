<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Equipo</title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/b8c0c93cb3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/form.css">
</head>

<body>
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
                        <button class="carousel-control-prev" type="button" data-bs-target="#mi-carousel" data-bs-slide="prev">
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








        


        <div class="pt-5">
            <?php
            include "includes/footer.php";
            ?>
        </div>


        <script src="js/bootstrap.bundle.min.js"></script>
    </body>

</html>