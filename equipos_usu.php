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



        <?php
        include "includes/header.php";
        ?>


        <div class="header pb-8 pt-5 pt-lg-8 d-flex bg-info align-items-center" style="min-height: 300px; background-image: url(https://png.pngtree.com/thumb_back/fw800/back_our/20190628/ourmid/pngtree-simple-atmosphere-blue-technology-panel-background-image_277438.jpg); background-size: cover; background-position: center top;">

            <span class="mask bg-gradient-default opacity-8"></span>

            <div class="container-fluid d-flex align-items-center">
                <div class="row">
                    <div class="col-lg-12 col-md-10">
                        
                    </div>
                </div>
            </div>
        </div>

        <div class=" mb-5 mt--5">
            <div class="row">
                <div class="col-xl-6 order-xl-2 mb-3 mb-xl-0">
                    <div class="card card-profile shadow">
                        <div class="row ">
                            <div class="col-8 m-5">

                                <div class="input-group">
                                    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                                    <button type="button" class="btn btn-outline-primary">search</button>
                                </div>

                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                <div class="col-xl-6 order-xl-1">
                    <div class="card  shadow">
                        <div class="card-header bg-white border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">MIS EQUIPOS</h3>
                                </div>

                            </div>
                        </div>
                        

                            <div class="row py-1 m-1 bg-dark">
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

                                    <div class=" " style="max-width: 20rem;">

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

                                                </p>

                                                <a href="modificar_equipo.php?idequipo=<?php echo $datosequi['id_equipo']; ?>" class="btn btn-outline-success p-md-1 mb-0">Modificar</a>
                                                <a href="functions/crud_equipo.php?equipoeli=<?php echo $datosequi['id_equipo']; ?>" class=" p-md-1 mb-0"><button class="btn btn-outline-danger" onclick="return confimarEliminar();">Eliminar</button> </a>

                                                <a href="#!" class="btn btn-outline-info p-md-1 mb-0">Ver nominas</a>

                                            </div>
                                        </div>

                                    </div>

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