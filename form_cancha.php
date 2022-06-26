<?php
include "functions/db.php";
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
                    <h2 class="">Registro de Cancha</h2>
                </div>
                <div class="col mt-3">
                    <form action="functions/crud_cancha.php" class="needs-validation" enctype="multipart/form-data" method="POST" novalidate>
                        <div class="row">
                            <input type="hidden" class="form-control" id="actiones" value="Crear" name="actiones">
                            <div class="col-12 col-md-6 mb-3">
                                <label for="precio_can" class="form-label">Precio</label>
                                <input type="text" class="form-control" placeholder="$24" id="precio_can" name="precio_can" required>
                            </div>
                            <div class="col-12 col-sm-6 mb-3">
                                <label for="horario_can" class="form-label">Horario</label>
                                <input type="text" class="form-control" placeholder="Lunes a Sabado" id="horario_can" name="horario_can"  required>
                            </div>
                            <div class="col-12 col-sm-6 mb-3">
                                <label class="form-label">Complejos Deportivo</label>
                                <select name="complejos_can" id="complejos_can" class="form-select" required>
                                    <option selected disabled value="">Complejos Deportivo</option>
                                    <?php
                                    $sqlpro = "SELECT * FROM complejosdeportivos";
                                    $resultpro = mysqli_query(conectar(), $sqlpro);
                                    while ($datospro = mysqli_fetch_array($resultpro)) {
                                    ?>
                                        <option value="<?php echo $datospro['id_complejo']; ?>"><?php echo $datospro['nombre_complejo']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6 mb-3">
                                <label class="form-label">Tipo de Cancha</label>
                                <select name="deportes_can" id="deportes_can" class="form-select" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option value="Futbol">Futbol</option>
                                    <option value="Padel">Padel</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6 mb-3">
                                <label class="form-label">Estado de Cancha</label>
                                <select name="estado_can" id="estado_can" class="form-select" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option value="1">Disponible</option>
                                    <option value="0">Nondisponible</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="imagen_can" class="form-label">Imagen Cancha</label>
                                <input type="file" class="form-control" name="imagen_can" accept="image/png, .jpeg, .jpg, image/gif" id="imagen_can" required>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="dimension_can" class="form-label">Dimension</label>
                                <input type="text" class="form-control" placeholder="24mx24m" id="dimension_can" name="dimension_can" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <div>
                                    <div class="form-check mb-3">
                                        <input type="checkbox" name="terminos" id="terminos" class="form-check-input" required>
                                        <label for="terminos" class="form-check-label">Acepto los terminos y condiciones</label>
                                    </div>
                                    <button type="submit"  name="Crear"class="col-12 btn btn-info button">Registrar</button>
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