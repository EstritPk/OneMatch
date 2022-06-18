<?php

session_start();
include("functions/db.php");
/*
if (isset($_SESSION['usu'])) {
    if (isset($_GET['rut_usu'])) {
        $sql = "SELECT * FROM usuario WHERE rut_usuario=" . $_GET['rut_usu'];
        $result = mysqli_query(conectar(), $sql);
        $datos = mysqli_fetch_array($result);
    }
    */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Administrador</title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/form.css">
</head>

<body>
    <!-- DEBO HACER CRUD -->
    <!-- RICKELSON, FALTA LA DESCRIPCION DEL ADMIN -->

    <body>
        <div class="pt-5">
            <?php
            include "includes/header.php";
            ?>
        </div>
        <div class="container ">
            <div class="row mt-3 form shadow-lg p-3 mb-5  rounded card">
                <div class="card-header text-center bg-info">
                    <h2 class="">Registro de Administrador</h2>
                </div>
                <div class="col mt-3">
                    <form action="functions/created/registrar_admin.php" method="POST">
                        <div class="row">
                            <div class="col-12 col-md-6 mb-3">
                                <label for="rut_adm" class="form-label">Rut</label>
                                <input type="text" class="form-control" placeholder="Mala Leche" id="rut_adm" name="rut_adm">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="name_adm" class="form-label">Nombre</label>
                                <input type="text" class="form-control" placeholder="Mala Leche" id="name_adm" name="name_adm">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="ap_paterno_adm" class="form-label">Apellido Paterno</label>
                                <input type="text" class="form-control" placeholder="Mala Leche" id="ap_paterno_adm" name="ap_paterno_adm">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="ap_materno_adm" class="form-label">Apellido Materno</label>
                                <input type="text" class="form-control" placeholder="Mala Leche" id="ap_materno_adm" name="ap_materno_adm">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="direccion_adm" class="form-label">Direccion</label>
                                <input type="text" class="form-control" placeholder="Mala Leche" id="direccion_adm" name="direccion_adm">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="telefono_adm" class="form-label">Telefono</label>
                                <input type="number" class="form-control" placeholder="Mala Leche" id="telefono_adm" name="telefono_adm">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="clave_adm" class="form-label">Clave</label>
                                <input type="password" class="form-control" placeholder="Mala Leche" id="clave_adm" name="clave_adm">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="email_adm" class="form-label">E-Mail</label>
                                <input type="email" class="form-control" placeholder="correo@correo.com" id="email_adm" name="email_adm">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 mb-3">
                                <label for="foto_adm" class="form-label">Foto</label>
                                <input type="file" class="form-control" name="foto_adm" id="foto_adm">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <div class="row">
                                    <div class="col-12 col-sm-6 mb-3">
                                        <label class="form-label" name="identidad_adm" id="identidad_adm">Identidad</label>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="identidad_adm" id="hombre_adm">
                                            <label for="hombre" class="form-check-label">Hombre</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="identidad_adm" id="mujer_adm">
                                            <label for="mujer" class="form-check-label">Mujer</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="identidad_adm" id="otro_adm">
                                            <label for="otro" class="form-check-label">Otro</label>
                                        </div>
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
        <?php
        include "includes/footer.php";
        ?>
        <div class="container" style="margin-left: 207px;">
                <table id="grilla" class="table table-striped table-hover bg-light border border-primary">
                <tr>
                    <th>RUT</th>
                    <th>NOMBRE</th>
                    <th>EMAIL</th>
                    <th>PHONE</th>
                    <th>DEPORTES</th>
                    <th>DIRECCION</th>
                    <th>DIRECCION</th>
                    <th>IDENTIDAD</th>
                    <th>EDAD</th>
                    <th>NOMBRE DE USUARIO</th>
                    <th>DESCRIPCION</th>
                    <th>IMAGEN</th>
                </tr>
                <!-- 
                   run
                   nombre
                   email
                   phone
                   deportes
                   direccion
                   identidad
                   edad
                   nombre de usuario
                   descripcion
                   imagen   
                -->
            </div>


            
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>

</html>
<?php
/*
} else {
    header("Location:index.php");
}
*/
?>