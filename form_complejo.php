<?php
session_start();

include "functions/db.php";

if(isset($_SESSION['usu']))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/b8c0c93cb3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    <body>
        <div class="pt-5">
            <?php
            include "includes/header.php";
            ?>
        </div>
        <div class="container ">
            <div class="row mt-3 form shadow-lg p-3 mb-5  rounded card">
                <div class="card-header text-center bg-info">
                    <h2 class="">Registro de complejos</h2>
                </div>
                <div class="col mt-3">
                    <form action="functions/crud_complejo.php" class="needs-validation " enctype="multipart/form-data" method="POST" novalidate>
                        <div class="row">
                            <div class="col-12 col-md-6 mb-3">
                                <label for="nombre_comp" class="form-label">Nombre Complejos</label>
                                <input type="text" class="form-control" placeholder="Deportes olimpicos" id="nombre_comp" name="nombre_comp" required>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="admin_comp" class="form-label">Rut Administrador</label>
                                <input type="text" class="form-control" placeholder="Nombre Administrador" value="<?php echo strtoupper($_SESSION['rut']); ?>" id="admin_comp" name="admin_comp" readonly >
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="direccion_comp" class="form-label">Direccion</label>
                                <input type="text" class="form-control" placeholder="Ñuble #289" id="direccion_comp" name="direccion_comp" required>
                            </div>
                            <div class="col-12 col-sm-6 mb-3">
                                <label class="form-label">Estado</label>
                                <select name="estado_comp" id="estado_comp" class="form-select" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option value="1">Disponible</option>
                                    <option value="0">No disponible</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for=imagen_comple" class="form-label">Logo del Complejo</label>
                                <input type="file" class="form-control" name="imagen_comple" id="imagen_comple"  accept="image/png, .jpeg, .jpg, image/gif" required>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="horario_comp" class="form-label">Horario</label>
                                <input type="text" class="form-control" placeholder="Lunes 8h " id="horario_comp" name="horario_comp" required>
                            </div>
                        </div>
                        <input type="hidden" value="Crear" id="actioncomp" name="actioncomp" readonly>
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
        <?php
        include "includes/footer.php";
        ?>
        <script src="js/validaciones.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>
<?php
}else{
    header("Location:index.php");
}
?>