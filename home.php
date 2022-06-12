<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/b8c0c93cb3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
</head>

<body>
    <?php
    include "includes/header.php";
    ?>
    <div class="container m">
        <div class="row mt-2">
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
    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <div class="text-uppercase fw-bold mb-4">
            <span>Nuestro redes social</span>
        </div>

        <div>
            <a class="btn btn-outline-success" href="form_admin.php" role="button">Administrador</a>
            <a class="btn btn-outline-success" href="form_cancha.php" role="button">canchas</a>
            <a class="btn btn-outline-success" href="form_complejo.php" role="button">complejos</a>
            <a class="btn btn-outline-success" href="form_equipo.php" role="button">Equipos</a>
            <a class="btn btn-outline-success" href="form_reservas.php" role="button">Reservas</a>
            <a class="btn btn-outline-success" href="form_usuarios.php" role="button">Usuarios</a>
            <a class="btn btn-outline-success" href="perfil_admin.php" role="button">Perfil Administrador</a>
            <a class="btn btn-outline-success" href="perfil_usuario.php" role="button">Perfil usuario</a>
            

        </div>
    </div>



    <?php
    include "includes/footer.php";
    ?>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>