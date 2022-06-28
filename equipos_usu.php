<?php
session_start();

include "functions/db.php";

if (isset($_SESSION['usu'])) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Equipo</title>
        <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://kit.fontawesome.com/b8c0c93cb3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/form.css">
    </head>

    <body>
        <!-- DEBO HACER CRUD -->

        <body>

            <?php
            include "includes/header.php";
            ?>
            <div class="row py-3 m-5 bg-dark">
                <div class="col">

                    <a href="form_equipo.php" class="btn btn-outline-warning" style="font-size: 20px;">Agregar Nuevo Equipo<i class="fa-solid fa-circle-plus p-2" style="font-size: 20px;"></i></a>

                </div>
            </div>

            <div class="row  m-3">



                <?php
                $sqlpro = "select * from equipos where creador_equipo='" . $_SESSION['rut'] . "'  and estado_equipo=1";

                $result = mysqli_query(conectar(), $sqlpro);
                while ($datosequi = mysqli_fetch_array($result)) {
                ?>

                    <div class=" my-3" style="max-width: 20rem;">

                        <div class="card">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <a href="#" class="block-20 d-flex align-items-start" style="background-image: url('images/fotos/<?php echo  $datosequi['imagen_equipo']; ?>');">
                                </a>
                                
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold"><?php echo $datosequi['nombre_equipo']; ?></a></h5>

                                <p class="mb-1"></p>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the
                                    card's content.
                                </p>

                                <a href="
                            " class="btn btn-outline-success p-md-1 mb-0">Modificar</a>
                                <a href="functions/crud_equipo.php?equipoeli=<?php echo $datosequi['id_equipo']; ?>" class=" p-md-1 mb-0"><button class="btn btn-outline-danger" onclick="return confimarEliminar();">Eliminar</button> </a>

                                <a href="#!" class="btn btn-outline-info p-md-1 mb-0">Ver nominas</a>

                            </div>
                        </div>

                    </div>

                <?php
                }
                ?>
            </div>
            <?php
            include "includes/footer.php";
            ?>
            <script src="js/validaciones.js"></script>
            <script src="js/bootstrap.bundle.min.js"></script>
            <script type="text/javascript">
                function confimarEliminar() {
                    var respuesta = confirm("Estas Segura que deseas eliminar tu equipo");
                    if (respuesta == true) {
                        return true;
                    } else {
                        return false;
                    }
                }
            </script>
        </body>

    </html>
<?php
} else {
    header("Location:index.php");
}
?>