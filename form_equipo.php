<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Equipo</title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
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
                    <h2 class="">Registro de Equipo</h2>
                </div>
                <div class="col mt-3">
                    <form action="" method="$_POST">
                        <div class="row">



                            <div class="col-12 col-md-6 mb-3">
                                <label for="nombre" class="form-label">Nombre del Equipo</label>
                                <input type="text" class="form-control" placeholder="Mala Leche" id="nombre">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="ap_paterno" class="form-label">Nomina</label>
                                <input type="text" class="form-control" placeholder="Mala Leche" id="ap_paterno" name="ap_paterno">
                            </div>

                            <div class="col-12 col-md-6 mb-3">
                                <label for="descripcion" class="form-label">Descripcion</label>
                                <textarea name="descripcion" id="descripcion" class="form-control"></textarea>
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
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>

</html>