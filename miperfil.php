<!DOCTYPE html>
<html lang="en">
<?php

include "functions/db.php";


$sqlpro = "SELECT * FROM usuarios where rut_usuario=1234";
$resultpro = mysqli_query(conectar(), $sqlpro);
$datos = mysqli_fetch_array($resultpro);


?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil Usuario</title>
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/b8c0c93cb3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/miperfil.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>





    <div class="pt-3">
        <?php
        include "includes/header.php";
        ?>
    </div>

    <div class="header pb-8 pt-5 pt-lg-8 d-flex bg-info align-items-center" style="min-height: 600px; background-image: url(images/dep2.jpeg); background-size: cover; background-position: center top;">

        <span class="mask bg-gradient-default opacity-8"></span>

        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-lg-12 col-md-10">
                    <h1 class=" text-white"><?php echo $datos['nombre_usuario'], " ", $datos['apellido_p_usuario']; ?></h1>
                    <p class="text-white mt-0 mb-5">estarrrrrrr</p>
                    <a href="modificar_usuario.php?rut_usu=<?php echo $datos['rut_usuario'];?> " class="btn btn-info"> Editar tu prerfil</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                <div class="card card-profile shadow">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                <a href="#">
                                    <img src="images/perfil.jpg" class="rounded-circle">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">

                    </div>
                    <div class="card-body pt-0 pt-md-4">
                        <div class="row">
                            <div class="col">
                                <div class="card-profile-stats d-flex justify-content-center mt-md-5">

                                    <div>
                                        <span class="heading">10</span>
                                        <span class="description">Equipos</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <h3>
                                <?php echo $datos['nombre_usuario'], " ", $datos['apellido_p_usuario']; ?><span class="font-weight-light">,
                                    <?php echo $datos['edad_usuario']; ?></span>
                            </h3>
                            <div class="h5 font-weight-300">
                                <i class="ni location_pin mr-2"></i>Chile,Coquimbo
                            </div>
                            <div class="h5 mt-4">
                                <i class="ni business_briefcase-24 mr-2"></i>Mi Descripcion
                            </div>
                          
                            <p><?php echo $datos['descripcion_usuario']; ?></p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">MI Cuentas</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="#!" class="btn btn-sm btn-primary">Mis Reservas</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <h4 class="  text-light mb-4">Datos del Usuario</h4>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-username">Nobre de usuario</label>
                                        <input type="text" id="input-username" class="form-control form-control-alternative" readonly value="<?php echo $datos['edad_usuario']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Correo</label>
                                        <input type="email" id="input-email" class="form-control form-control-alternative" readonly placeholder="<?php echo $datos['edad_usuario']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-first-name">Nombre</label>
                                        <input type="text" id="input-first-name" class="form-control form-control-alternative" readonly placeholder="First name" value="<?php echo $datos['edad_usuario']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="">Apellidos</label>
                                        <input type="text"  class="form-control form-control-alternative" readonly placeholder="Last name" value="<?php echo $datos['edad_usuario']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4">
                        <!-- Address -->
                        <h4 class="text-light text-muted mb-4">Contact information</h4>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-address">Direccion</label>
                                        <input id="input-address" class="form-control form-control-alternative" readonly placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-city">Ciudad</label>
                                        <input type="text" id="input-city" readonly class="form-control form-control-alternative" placeholder="City" value="New York">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-country">Pais</label>
                                        <input type="text" id="input-country" readonly class="form-control form-control-alternative" placeholder="Country" value="United States">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-country">Telefono</label>
                                        <input type="number" id="input-postal-code" readonly class="form-control form-control-alternative" placeholder="Postal code">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4">
                        <!-- Description -->


                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>













    <?php
    include "includes/footer.php";
    ?>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>

    <script src="js/owl.carousel.min.js"></script>

    <script src="js/main.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>