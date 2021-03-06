<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(isset($_SESSION['usu']))
{
include "functions/db.php";
if (isset($_GET['idequipo'])) {
    $sql = "SELECT * FROM equipos where id_equipo=" . $_GET['idequipo'];
    $resul = mysqli_query(conectar(), $sql);
    $datos = mysqli_fetch_array($resul);
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Equipo</title>
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
                    <h2 class="">Registro de Equipo</h2>
                </div>
                <div class="col mt-3">
                    <form action="functions/crud_equipo.php" class="needs-validation" enctype="multipart/form-data" method="POST" novalidate>
                        <div class="row">
                            <div class="col-12 col-md-6 mb-3">
                                <label for="nombre_equ" class="form-label">Nombre del Equipo</label>
                                <input type="text" class="form-control" value="<?php echo $datos['nombre_equipo']; ?>" placeholder="" name="nombre_equ" id="nombre_equ validationCustom03" required>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="creador_equ" class="form-label">Creador Equipo</label>
                                <input type="text" class="form-control" value="<?php echo $datos['creador_equipo']; ?>" placeholder="" id="creador_equ" name="creador_equ" required>
                            </div>
                            <div class="col-12 col-sm-6 mb-3">
                                <label class="form-label">Tipo de eqipo</label>
                                <select name="tipo_equ" id="tipo_equ" class="form-select" required>
                                    <option selected disabled value="">Seleccione tipo de equipo</option>
                                    <option value="Empresa">Empresa</option>
                                    <option value="Colegio">Colegio</option>
                                    <option value="Universidad">Universidad</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="descripcion_equ" class="form-label">Descripcion</label>
                                <textarea value="descripcion_equ" name="descripcion_equ" id="descripcion_equ" class="form-control" required></textarea>
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
                            <div class="col-12 col-md-6 mb-3">
                                <label for="imagen_equi" class="form-label">Imagen Equipo</label>
                                <input type="file" class="form-control" name="imagen_equi"  accept="image/png, .jpeg, .jpg, image/gif" id="imagen_equi" required>
                                <input type="hidden" class="form-control" id="idequipo" name="idequipo" value="<?php echo $_GET['idequipo']; ?>">
                            </div>
                        </div>
                        <input type="hidden" value="Modificar" id="actionequipo" name="actionequipo" readonly>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <div>
                                    <div class="form-check mb-3">
                                        <input type="checkbox" name="terminos" id="terminos" class="form-check-input" required>
                                        <label for="terminos" class="form-check-label">Acepto los terminos y condiciones</label>
                                    </div>
                                    <button type="submit" class="col-12 btn btn-info button">Modificar</button>
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