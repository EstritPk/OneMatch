<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Usuario</title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/b8c0c93cb3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/form.css">
</head>

<body>
    <!-- DEBO HACER CRUD -->

    <!--RICKELSON, FALTA LA DIRECCION DEL USUARIO -->

    <body>
        <div class="pt-5">
            
        </div>
        <div class="container ">
            <div class="row mt-3 form shadow-lg p-3 mb-5  rounded card">
                <div class="card-header text-center bg-info">
                    <h2 class="">Registro de Usuario</h2>
                </div>
                <div class="col mt-3">
                    <form action="functions/crud_usuario.php" class="needs-validation " enctype="multipart/form-data" method="POST" novalidate>
                        <div class="row">
                            <div class="col-12 col-md-6 mb-3">
                                <label for="rut_usu" class="form-label">Rut</label>
                                <input type="text" class="form-control" placeholder="Mala Leche" id="rut_usu" name="rut_usu" required>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="name_usu" class="form-label">Nombre de Usuario</label>
                                <input type="text" class="form-control" placeholder="Mala Leche" id="name_usu" name="name_usu" required>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="nombre_usu" class="form-label">Nombre</label>
                                <input type="text" class="form-control" placeholder="Mala Leche" id="nombre_usu" name="nombre_usu" required>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="ap_paterno_usu" class="form-label">Apellido Paterno</label>
                                <input type="text" class="form-control" placeholder="Mala Leche" id="ap_paterno_usu" name="ap_paterno_usu" required>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="ap_materno_usu" class="form-label">Apellido Materno</label>
                                <input type="text" class="form-control" placeholder="Mala Leche" id="ap_materno_usu" name="ap_materno_usu" required>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="direccion_usu" class="form-label">Direccion</label>
                                <input type="text" class="form-control" placeholder="Mala Leche" id="direccion_usu" name="direccion_usu" required>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="edad_usu" class="form-label">Edad</label>
                                <input type="number" class="form-control" placeholder="Mala Leche" id="edad_usu" name="edad_usu" required>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="telefono_usu" class="form-label">Telefono</label>
                                <input type="number" class="form-control" placeholder="Mala Leche" id="telefono_usu" name="telefono_usu" required>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="clave_usu" class="form-label">Clave</label>
                                <input type="password" class="form-control" placeholder="Mala Leche" id="clave_usu" name="clave_usu" required>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="email_usu" class="form-label">E-Mail</label>
                                <input type="email" class="form-control" placeholder="correo@correo.com" id="email_usu" name="email_usu" required>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="imagen_usu" class="form-label">Imagen</label>
                                <input type="file" class="form-control" name="imagen_usu" id="imagen_usu" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 mb-3">
                                <label for="descripcion_usu" class="form-label">Descripcion</label>
                                <textarea name="descripcion_usu" id="descripcion_usu" class="form-control" required></textarea>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <div class="row">
                                    <div class="col-12 col-sm-6 mb-3">
                                        <label class="form-label">Identidad</label>
                                        <select name="identidad_adm" id="identidad_adm" class="form-select" required>
                                            <option selected disabled value="">Seleccione Identidad</option>
                                            <option value="Hombre">Hombre</option>
                                            <option value="Mujer">Mujer</option>
                                            <option value="Otro">Otro</option>
                                        </select>
                                    </div>
                                    </div>
                                    <div class="col-12 col-sm-6 mb-3">
                                        <label class="form-label">Deportes</label>
                                        <select name="deporte_equ" id="deporte_equ" class="form-select" required>
                                            <option selected disabled value="">Seleccione Deporte</option>
                                            <?php
                                            $sqlpro = "SELECT * FROM deportes";
                                            $resultpro = mysqli_query(conectar(), $sqlpro);
                                            while ($datospro = mysqli_fetch_array($resultpro)) {
                                            ?>
                                                <option value="<?php echo $datospro['id_deporte']; ?>"><?php echo $datospro['nombre_deporte']; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" value="Crear" id="actionusuario" name="actionusuario" readonly>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <div>
                                    <div class="form-check mb-3">
                                        <input type="checkbox" name="terminos" id="terminos_equ" class="form-check-input" required>
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
        
        <script src="js/validaciones.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>