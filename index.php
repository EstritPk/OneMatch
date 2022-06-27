<?php

include "functions/db.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/estlog.css">
    <title>Login</title>
</head>
<body>
    <section class="h-100 gradient-form bg-dark">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10 ">
                    <div class="card  shadow-lg rounded-3 text-white">
                        <div class="row g-0">
                            <div class="col-lg-6 bg-dark ">
                                <div class="card-body p-md-5 mx-md-4">
                                    <div class="text-center">
                                        <img src="images/My project.png" style="width: 265px;" alt="logo">
                                    </div>
                                    <form action="functions/validar_login.php" class="needs-validation formulario" method="POST" novalidate>
                                        <div class="form-outline form-white mb-4">
                                            <input type="email" id="form2Example11" class="form-control" name="email" placeholder="ingresa tu user mail" required />
                                        </div>
                                        <div class="form-outline form-white mb-4">
                                            <input type="password" id="form2Example22" name="clave" class="form-control" required />
                                        </div>

                                        <div class="row">
                                            <div class="col-6 col-sm-6 d-flex justify-content-center">
                                                <div>
                                                    <input type="submit" name="actionlogin" value="ingresar como Usuario" class="col-12 btn btn-outline-info ">
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-6 d-flex justify-content-center">
                                                <div>
                                                    <input type="submit" name="actionlogin" value="ingresar como Aministrador" class="col-12 btn btn-outline-success ">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="d-flex align-items-center justify-content-center p-4">
                                        <p class="mb-0 me-2 text-white">No tienes una cuenta?</p>
                                        <button type="button" class="btn btn-outline-danger">Crear cuenta</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center  gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4"></h4>
                                    <p class="lg mb-0">"Lo más importante del deporte no es ganar, sino participar, porque lo esencial en la vida no es el éxito, sino esforzarse por conseguirlo".
                                        Barón Pierre de Coubertin.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="js/validaciones.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>