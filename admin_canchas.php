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
                    <h2 class="primera_linea">Complejos deportivos los Angeles</h2>
                    <h3 class="segunda_linea">"Los campeones siguen jugando hasta que lo hacen bien".</h3>
                    <div class="contenedor-btns">
                        <a href="#" class=" btn btn-outline-info">Mis reservas</a>
                        <a href="#" class="btn-outline-info">Mis Complejos</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="row">
        <div class="col">
            <div class="border-bottom">
                <h3 class="text-dark text-center">Mis Canchas</h3>
            </div>
        </div>
    </div>

    <div class="row py-3 m-5 bg-dark" >
        <div class="col">
           
                <a href="form_cancha.php" class="btn btn-outline-info" style="font-size: 20px;">Agregar Nueva Cancha<i class="fa-solid fa-circle-plus p-2" style="font-size: 20px;"></i></a>
           
        </div>
    </div>
    <div class="  row  justify-content-center">
        <div class="row ">
            <div class="col-6 col-sm-6 col-lg-3 mb-4">
                <div class="card" style="width: 100%;">
                    <img class="card-img-top" src="images/futbol5.jpg" alt="">
                    <div class="card-body">

                        <p class="card-text ">cancha de futbol,75mx65m, direccion:ñuble780, complejos los panas </p>
                        <p class="ml-auto meta2 m-3">
                            <a href="#" class="mr-2">Precio</a>
                            <a href="#" class="meta-chat">$24000 x hora</a>
                        </p>
                        <p><a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                            <a href="#" class="btn btn-sm btn-success">Modificar</a>
                            <a href="#" class="btn btn-sm btn-secondary">Detalles</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-6 col-lg-3 mb-4">
                <div class="card " style="width: 100%;">
                    <img class="card-img-top" src="images/CanchasPaddle.jpg" alt="">
                    <div class="card-body">

                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p class="ml-auto meta2 m-3">
                            <a href="#" class="mr-2">Precio</a>
                            <a href="#" class="meta-chat">$24000 x hora</a>
                        </p>
                        <p><a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                            <a href="#" class="btn btn-sm btn-success">Modificar</a>
                            <a href="#" class="btn btn-sm btn-secondary">Detalles</a>
                        </p>


                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-6 col-lg-3 mb-4">
                <div class="card " style="width: 100%;">

                    <img class="card-img-top" src="images/tenis.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Cancha tenis</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                        <a href="#" class="btn btn-sm btn-success">Modificar</a>
                        <a href="#" class="btn btn-sm btn-secondary">Detalles</a>
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



    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>

    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>