<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/form.css">
</head>

<body>

    <body>
        <?php
        include "includes/header.php";
        ?>
        <div class="container ">
            <div class="row mt-3 form shadow-lg p-3 mb-5  rounded center">
                <div class="col">
                    <form action="" method="$_POST">
                        <div class="row">
                            <div class="col-12 col-md-6 mb-3">
                                <label for="rut_usu" class="form-label">Rut</label>
                                <input type="text" class="form-control" placeholder="Mala Leche" id="rut_usu" name="rut_usu">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="nombre_usu" class="form-label">Nombre de Usuario</label>
                                <input type="text" class="form-control" placeholder="Mala Leche" id="nombre_usu" name="nombre_usu">
                            </div>

                            <div class="col-12 col-md-6 mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" placeholder="Mala Leche" id="nombre">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="ap_paterno" class="form-label">Apellido Paterno</label>
                                <input type="text" class="form-control" placeholder="Mala Leche" id="ap_paterno" name="ap_paterno">
                            </div>

                            <div class="col-12 col-md-6 mb-3">
                                <label for="ap_materno" class="form-label">Apellido Paterno</label>
                                <input type="text" class="form-control" placeholder="Mala Leche" id="ap_materno" name="ap_materno">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="direccion" class="form-label">Direccion</label>
                                <input type="text" class="form-control" placeholder="Mala Leche" id="direccion" name="direccion">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="edad" class="form-label">Edad</label>
                                <input type="number" class="form-control" placeholder="Mala Leche" id="edad" name="edad">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="telefono" class="form-label">Telefono</label>
                                <input type="number" class="form-control" placeholder="Mala Leche" id="telefono" name="telefono">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="clave" class="form-label">Clave</label>
                                <input type="password" class="form-control" placeholder="Mala Leche" id="clave" name="clave">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="correo" class="form-label">Correo</label>
                                <input type="email" class="form-control" placeholder="correo@correo.com" id="correo" name="correo">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="foto" class="form-label">Foto</label>
                                <input type="file" class="form-control" name="foto" id="foto">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-6 mb-3">
                                <label for="descripcion" class="form-label">Descripcion</label>
                                <textarea name="descripcion" id="descripcion" class="form-control"></textarea>
                            </div>

                            <div class="col-12 col-md-6 mb-3">
                                <div class="row">
                                    <div class="col-12 col-sm-6 mb-3">
                                        <label class="form-label">Genero</label>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="genero" id="hombre">
                                            <label for="hombre" class="form-check-label">Hombre</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="genero" id="mujer">
                                            <label for="mujer" class="form-check-label">Mujer</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="genero" id="otro">
                                            <label for="otro" class="form-check-label">Otro</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 mb-3">
                                        <label class="form-label">Deportes</label>
                                        <select name="deportes" id="deportes" class="form-select">
                                            <option value="football">Football</option>
                                            <option value="tenis">Tenis</option>
                                            <option value="padel">Padel</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <div>
                                    <div class="form-check mb-3">
                                        <input type="checkbox" name="terminos" id="terminos" class="form-check-input">
                                        <label for="terminos" class="form-check-label">Acepto los terminos y condiciones</label>
                                    </div>
                                    <button type="submit" class="col-12 button">Registrar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>

</html>