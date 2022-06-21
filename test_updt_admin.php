<?php
include "includes/header.php";
include "functions/db.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Administrador</title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">
    <script src="https://kit.fontawesome.com/b8c0c93cb3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    <body>
        <div class="pt-5">
        </div>
        <div class="container ">
            <div class="row mt-3 form shadow-lg p-3 mb-5  rounded card">
                <div class="card-header text-center bg-info">
                    <h2 class="">Registro de Administrador</h2>
                </div>
                <div class="col mt-3">
                    <form action="functions/crud_admin.php" class="needs-validation" name="actiones" id="actiones" method="POST" enctype="multipart/form-data" novalidate >
                        <div class="row">
                            <div class="col-12 col-md-6 mb-3">
                                <label for="rut_adm" class="form-label">Rut</label>
                                <input type="text" class="form-control" placeholder="Mala Leche" id="rut" name="rut_adm" required>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="name_adm" class="form-label">Nombre</label>
                                <input type="text" class="form-control" placeholder="Mala Leche" id="name_adm" name="name_adm" required>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="ap_paterno_adm" class="form-label">Apellido Paterno</label>
                                <input type="text" class="form-control" placeholder="Mala Leche" id="ap_paterno_adm" name="ap_paterno_adm" required>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="ap_materno_adm" class="form-label">Apellido Materno</label>
                                <input type="text" class="form-control" placeholder="Mala Leche" id="ap_materno_adm" name="ap_materno_adm" required>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="direccion_adm" class="form-label">Direccion</label>
                                <input type="text" class="form-control" placeholder="Mala Leche" id="direccion_adm" name="direccion_adm" required>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="telefono_adm" class="form-label">Telefono</label>
                                <input type="number" class="form-control" placeholder="Mala Leche" id="telefono_adm" name="telefono_adm" required>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="clave_adm" class="form-label">Clave</label>
                                <input type="password" class="form-control" placeholder="Mala Leche" id="clave_adm" name="clave_adm" required>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="email_adm" class="form-label">E-Mail</label>
                                <input type="email" class="form-control" placeholder="correo@correo.com" id="email_adm" name="email_adm" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 mb-3">
                                <label for="foto_adm" class="form-label">Foto</label>
                                <input type="file" class="form-control" name="foto_adm" id="foto_adm" required>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <div class="row">
                                    <div class="col-12 col-sm-6 mb-3">
                                        <label class="form-label" name="identidad_adm" id="identidad_adm">Identidad</label>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="identidad_adm" id="hombre_adm" required>
                                            <label for="hombre" class="form-check-label">Hombre</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="identidad_adm" id="mujer_adm" required>
                                            <label for="mujer" class="form-check-label">Mujer</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="identidad_adm" id="otro_adm" required>
                                            <label for="otro" class="form-check-label">Otro</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" value="Crear" id="actiones" name="actiones" readonly>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <div>
                                    <div class="form-check mb-3">
                                        <input type="checkbox" name="terminos" id="terminos_adm" class="form-check-input" required>
                                        <label for="terminos" class="form-check-label">Acepto los terminos y condiciones</label>
                                    </div>
                                    <button type="submit" name="Crear" value="Crear" class="col-12 btn btn-info button">Registrar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <section>
            <div class="card m-2">
                <div class="card-header py-2  bg-info">
                    <h5 class=" text-light">Mis Reservas</h5>
                </div>
                <div class="card-body bb ">
                    <div class="row">
                        <div class="box-body">
                            <table id="tabla_Reservas" class="table table-bordered table-condensed table-hover responsive" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">Rut</th>
                                        <th class="text-center">Nombres</th>
                                        <th class="text-center">Cancha</th>
                                        <th class="text-center">Cantidad de hora</th>
                                        <th class="text-center">Fecha reservacion</th>
                                        <th class="text-center">Monto</th>
                                        <th class="text-center">Hora Empezar</th>
                                        <th class="text-center">Hora Termino</th>
                                        <th class="text-center" style="width: 10%;">Facturas</th>
                                    </tr>
                                    <tr>
                                        <td class="text-center">10045</td>
                                        <td class="text-center">21345234-1</td>
                                        <td class="text-center">Nedjo Rojas</td>
                                        <td class="text-center">01_cancha</td>
                                        <td class="text-center">5</td>
                                        <td class="text-center">25-31-2022</td>
                                        <td class="text-center">$24.000</td>
                                        <td class="text-center">14h</td>
                                        <td class="text-center">19h</td>
                                        <td class="text-center"><i class="fa-solid fa-receipt" style="font-size: 30px;"></i></td>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        </section>

        <?php
        include "includes/footer.php";
        ?>
        <!--<script src="js/main.js"></script>-->
        <script src="js/validaciones.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>