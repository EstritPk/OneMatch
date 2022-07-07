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
        <section>
            <div class="card m-2">
                <div class="card-header py-2  bg-info">
                    <h5 class=" text-light">Modificar Usuario</h5>
                </div>
                <div class="card-body bb ">
                    <div class="row">
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
                                            <button type="submit" name="Modificar" value="Modificar" class="col-12 btn btn-info button">Eliminar</button>
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