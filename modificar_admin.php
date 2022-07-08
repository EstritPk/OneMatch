<?php
session_start();
if(isset($_SESSION['usu']))
{
include "functions/db.php";
if (isset($_GET['rut_adm'])) {
    //$sql = "select * from administradores where rut_admin=" . $_GET['rut_adm'];
    $sql = "select * from adminsitradores where rut_admin='" .$_SESSION['rut']. "'  and estado_administrador=1";
    $resul = mysqli_query(conectar(), $sql);
    $datos = mysqli_fetch_array($resul);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Administrador</title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
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
            <div class="row mt-3 form shadow-lg p-3 mb-5  rounded card">
                <div class="card-header text-center bg-info">
                    <h2 class="">Modificar Administrador</h2>
                </div>
                <div class="col mt-3">
                    <form action="functions/crud_admin.php" class="needs-validation" enctype="multipart/form-data" method="POST" novalidate>
                        <div class="row">
                            <input type="hidden" class="form-control" value="Modificar" id="actionadmin" name="actionadmin">
                            <input type="hidden" class="form-control" id="rutadmin" name="rutadmin" value="<?php echo $_GET['rut_adm']; ?>">
                            <div class="col-12 col-md-6 mb-3">
                                <label for="rut_adm" class="form-label">Rut</label>
                                <input type="text" class="form-control" placeholder="Mala Leche" id="rut_adm" name="rut_adm" value="<?php echo $datos['rut_admin']; ?>" readonly>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="name_adm" class="form-label">Nombre</label>
                                <input type="text" class="form-control" placeholder="Mala Leche" id="name_adm" name="name_adm" value="<?php echo $datos['name_administrador']; ?>" required>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="ap_paterno_adm" class="form-label">Apellido Paterno</label>
                                <input type="text" class="form-control" placeholder="Mala Leche" id="ap_paterno_adm" name="ap_paterno_adm" value="<?php echo $datos['apellido_p_administrador']; ?>" required>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="ap_materno_adm" class="form-label">Apellido Materno</label>
                                <input type="text" class="form-control" placeholder="Mala Leche" id="ap_materno_adm" name="ap_materno_adm" value="<?php echo $datos['apellido_m_administrador']; ?>" >
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="direccion_adm" class="form-label">Direccion</label>
                                <input type="text" class="form-control" placeholder="Mala Leche" id="direccion_adm" name="direccion_adm" value="<?php echo $datos['direccion_administrador']; ?>" required>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="edad_adm" class="form-label">Edad</label>
                                <input type="number" class="form-control" placeholder="Mala Leche" id="edad_adm" name="edad_adm" value="<?php echo $datos['edad_administrador']; ?>" required>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="telefono_adm" class="form-label">Telefono</label>
                                <input type="number" class="form-control" placeholder="Mala Leche" id="telefono_adm" name="telefono_adm" value="<?php echo $datos['telefono_administrador']; ?>" required>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="clave_adm" class="form-label">Clave</label>
                                <input type="password" class="form-control" placeholder="Mala Leche" id="clave_adm" name="clave_adm" readonly>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="email_adm" class="form-label">E-Mail</label>
                                <input type="email" class="form-control" placeholder="correo@correo.com" id="email_adm" name="email_adm" value="<?php echo $datos['email_administrador']; ?>" required>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="imagen_adm" class="form-label">Foto</label>
                                <input type="file" class="form-control" name="imagen_adm" id="imagen_adm" value="<?php echo $datos['imagen_administrador']; ?>" required>
                            </div>
                                <div class="col-12 col-sm-6 mb-3">
                                    <label class="form-label">Identidad</label>
                                    <select name="identidad_adm" id="identidad_adm" class="form-select" required>
                                        <option value="<?php echo $datos['identidad_administrador']; ?>">Seleccione Identidad</option>
                                        <option value="Hombre">Hombre</option>
                                        <option value="Mujer">Mujer</option>
                                        <option value="Otro">Otro</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <div>
                                    <div class="form-check mb-3">
                                        <input type="checkbox" name="terminos" id="terminos" class="form-check-input" required>
                                        <label for="terminos" class="form-check-label">Acepto los terminos y condiciones</label>
                                    </div>
                                    <!--<input type="submit" value="Modificar" id="Modificar" name="Modificar" action="Modificar" class="col-12 btn btn-info button">-->
                                    <button type="submit" name="Modificar" value="Modificar" class="col-12 btn btn-info button">Modificar</button>
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
        <script src="js/validaciones.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>
<?php
}else{
    header("Location:functions/error.php");
}
?>