<?php
include "includes/header.php";
include "functions/db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Equipo</title>
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
                    <h2 class="">Registro de Equipo</h2>
                </div>
                <div class="col mt-3">
                    <form action="functions/crud_equipo.php" class="needs-validation" name="actionequipo" id="actionequipo" method="POST" enctype="multipart/form-data" novalidate >
                        <div class="row">
                            <?php
                                $conn = mysqli_connect("localhost", "root", "root", "onematch");
                                $sql = "SELECT * FROM equipos";
                                $result = mysqli_query($conn, $sql);
                                while ($datos = mysqli_fetch_array($result)) { 
                            ?>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="nombre_equ" class="form-label">Nombre del Equipo</label>
                                <input type="text" class="form-control" placeholder="Mala Leche" name="nombre_equ" id="nombre_equ validationCustom03" value="<?php echo $datos['nombre_equipo'];?>" required>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="creador_equ" class="form-label">Creador Equipo</label>
                                <input type="text" class="form-control" placeholder="Mala Leche" id="creador_equ" name="creador_equ" value="<?php echo $datos['creador_equipo'];?>" required>
                            </div>
                            <div class="col-12 col-sm-6 mb-3">
                                <label class="form-label">Tipo de eqipo</label>
                                <select name="tipo_equ" id="tipo_equ" class="form-select" required>
                                    <option selected disabled value=""><?php echo $datos['tipo_equipo'];?></option>
                                    <option name="tipo_equ" value="<?php echo $datos['tipo_equipo'];?>">Empresa</option>
                                    <option name="tipo_equ" value="<?php echo $datos['tipo_equipo'];?>">Colegio</option>
                                    <option name="tipo_equ" value="<?php echo $datos['tipo_equipo'];?>">Universida</option>
                                    <option name="tipo_equ" value="<?php echo $datos['tipo_equipo'];?>">Otro</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="descripcion_equ" class="form-label">Descripcion</label>
                                <textarea value="descripcion_equ" name="descripcion_equ" id="descripcion_equ" class="form-control" required><?php echo $datos['descripcion_equipo'];?></textarea>
                            </div>
                            <?php
                                $sqlpro = "SELECT * FROM deportes";
                                $resultpro = mysqli_query(conectar(), $sqlpro);
                                while ($datospro = mysqli_fetch_array($resultpro)) {
                            ?>
                            <div class="col-12 col-sm-6 mb-3">
                                <label class="form-label">Deportes</label>
                                <select name="deporte_equ" id="deporte_equ" class="form-select" required>
                                    <option selected disabled ><?php echo $datospro['nombre_deporte']; ?></option>
                                    <?php
                                    }
                                    ?>
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
                        <input type="hidden" value="Crear" id="actionequipo" name="actionequipo" readonly>
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
                        <?php
                            }
                        ?>
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
                        <?php
                            //$conn = mysqli_connect("localhost", "root", "root", "onematch");
                            //$sql = "SELECT * FROM equipos";
                            //$result = mysqli_query($conn, $sql);
                        ?>
                        <div class="box-body">
                            <table id="tabla_equipos" class="table table-bordered table-condensed table-hover responsive" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">Nombre Equipo</th>
                                        <th class="text-center">Creador del Equipo</th>
                                        <th class="text-center">Tipo de Equipo</th>
                                        <th class="text-center">Descripcion del Equipo</th>
                                        <th class="text-center">Deporte</th>
                                    </tr>
                                    <?php //while ($datos = mysqli_fetch_array($result)) { ?>
                                    <tr>
                                        <td class="text-center"><?php //echo $datos['nombre_equipo']; ?></td>
                                        <td class="text-center"><?php //echo $datos['creador_equipo']; ?></td>
                                        <td class="text-center"><?php //echo $datos['tipo_equipo']; ?></td>
                                        <td class="text-center"><?php //echo $datos['descripcion_equipo']; ?></td>
                                        <td class="text-center"><?php //echo $datos['deportes_id_deporte']; ?></td>
                                        <td>
                                            <button type="submit" name="Modificar" value="Modificar" class="col-12 btn btn-info button">Modificar</button><br><br>
                                            <!--<a href="functions/crud_equipo.php?actionequipo=<?php //echo $datos['nombre_equ']; ?>" > -->
                                            <!--<img src="images/refresh.png" width="25px" height="25px" ></a> -->
                                            <button type="submit" name="Modificar" value="Modificar" class="col-12 btn btn-info button">Eliminar</button>
                                            <!--<a href="functions/crud_equipo.php?nombre_equ=<?php //echo $datos['nombre_equ']; ?>" > -->
                                            <!--<img src="images/delete.png" width="25px" height="25px" ></a> -->
                                        </td>
                                        <?php
                                        //}
                                        ?>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <?php
        include "includes/footer.php";
        ?>
        <script src="js/validaciones.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>