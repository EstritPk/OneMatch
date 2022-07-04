<?php
session_start();

include "functions/db.php";

if (isset($_SESSION['usu'])) {
    if (isset($_GET['idequipo'])) {
        $sql = "SELECT * FROM equipos where id_equipo=" . $_GET['idequipo'];
        $resul = mysqli_query(conectar(), $sql);
        $datosequi = mysqli_fetch_array($resul);
    }

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nominas Equipo</title>
        <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/card_perfil.css">

        <script src="https://kit.fontawesome.com/b8c0c93cb3.js" crossorigin="anonymous"></script>

    </head>

    <body>
        <!-- DEBO HACER CRUD -->



        <div class="pt-3">
            <?php
            include "includes/header.php";
            ?>
        </div>


        <div class="header pb-8 pt-5 pt-lg-8 d-flex bg-info align-items-center" style="min-height: 300px; background-image: url(https://png.pngtree.com/thumb_back/fw800/back_our/20190628/ourmid/pngtree-simple-atmosphere-blue-technology-panel-background-image_277438.jpg); background-size: cover; background-position: center top;">

            <span class="mask bg-gradient-default opacity-8"></span>

            <div class="container-fluid d-flex align-items-center">
                <div class="row">
                    <div class="col-lg-12 col-md-10">

                    </div>
                </div>
            </div>
        </div>

        <div class=" m-1 mt--7">


            <div class="col-xl-12 ">
                <div class=" bg shadow-lg">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <h3 class="mb-0">Nominas del Equipo <?php echo $datosequi['nombre_equipo']; ?></h3>
                            </div>

                        </div>
                    </div>




                    <div class="row  m-3">

                        <?php
                        $consulta = "select * from nominas where  equipos_id_equipo=" . $datosequi['id_equipo'];
                        $resul = mysqli_query(conectar(),  $consulta);
                        $ferificar = mysqli_num_rows($resul);
                        if ($ferificar == 0) {

                        ?>
                            <div class="alert alert-warning d-flex align-items-center" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:">
                                    <use xlink:href="#exclamation-triangle-fill" />
                                </svg>
                                <div>
                                Por el momento el equipo se encuentra sin nominas
                                </div>
                            </div>
                        <?php
                        } else {
                        ?>
                            <?php
                            while ($datosnomina = mysqli_fetch_array($resul)) {
                             $sqlpro = "select * from usuarios where rut_usuario='" .$datosnomina['usuarios_rut_usuario']. "'  and estado_usuario=1";

                             $resultpro = mysqli_query(conectar(), $sqlpro);
                             $datos = mysqli_fetch_array($resultpro);

                            ?>
                                <div class="col-12 col-md-3 mb-3">

                                    <div class="card mb-4 shadow-lg " style="width: 300px;">
                                        <div class="card-body text-center">
                                        <a href="#">
                                    <?php
                                        if ($datos['imagen_usuario'] == "") {
                                        ?>
                                            <img src="images/fotos/user.png" class="rounded-circle" style="width: 100px;">
                                        <?php
                                        } else {
                                        ?>
                                            <img src="images/fotos/<?php echo $datos['imagen_usuario']; ?>" class="rounded-circle img-fluid" style="width: 200px;">
                                        <?php
                                        }
                                        ?>
                                        
                                    </a>
                                            <!-- <img src="images/fotos/<?php echo $datos['imagen_usuario']; ?>" alt="avatar" class="rounded img-fluid"> -->
                                            <h5 class="my-3"><?php echo $datos['nombre_usuario'], " ", $datos['apellido_p_usuario']; ?></h5>
                                            <p class="mb-1"><?php echo $datos['descripcion_usuario']; ?></p>

                                            <div class="d-flex justify-content-center mb-2">
                                                <p><img src="images/whatsapp.png" alt="">+56 <?php echo $datos['telefono_usuario']; ?></p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            <?php
                            }
                            ?>
                        <?php
                        }
                        ?>





                    </div>
                    <hr class="my-4">




                </div>
            </div>
        </div>
        </div>
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