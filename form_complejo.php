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
    <!-- DEBO HACER CRUD -->

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
                    <form action="" method="$_POST">
                        <div class="row">



                            <div class="col-12 col-md-6 mb-3">
                                <label for="nombre_comp" class="form-label">Nombre Complejos</label>
                                <input type="text" class="form-control" placeholder="Deportes olimpicos" id="nombre_comp" name="nombre_comp">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="admin" class="form-label">Aministrador</label>
                                <input type="text" class="form-control" placeholder="JOSE MARIA" id="admin" name="admin">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="direccion" class="form-label">Direccion</label>
                                <input type="text" class="form-control" placeholder="Ñuble #289" id="direccion" name="direccion">
                            </div>

                            <div class="col-12 col-sm-6 mb-3">
                                <label class="form-label">Estado</label>
                                <select name="estado" id="estado" class="form-select">
                                    <option value="0">Disponible</option>
                                    <option value="1">Nondisponible</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="foto" class="form-label">logo complejos</label>
                                <input type="file" class="form-control" name="foto" id="foto">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="horario" class="form-label">Horario</label>
                                <input type="text" class="form-control" placeholder="Lunes 8h " id="horario" name="horario">
                            </div>
                        </div>




                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <div>
                                    <div class="form-check mb-3">
                                        <input type="checkbox" name="terminos" id="terminos" class="form-check-input">
                                        <label for="terminos" class="form-check-label">Acepto los terminos y condiciones</label>
                                    </div>
                                    <button type="submit" class="col-12 btn btn-info button">Registrar</button>
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
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>

</html>