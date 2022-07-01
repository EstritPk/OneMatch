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
        <title>amin reservas</title>
        <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
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
        <section class="header2">
            <div class="container">
                <div class="row contenedor_logo_menu">
                    <div class="logo col-xs-12 col-md-6">
                        <a href="#"><img src="images/complejologo.png" alt=""></a>
                    </div>
                </div>

                <div class="row textos">
                    <div class="col-md-12">
                        <h2 class="primera_linea">Complejos deportivos los Angeles</h2>
                        <h3 class="segunda_linea">"Los campeones siguen jugando hasta que lo hacen bien".</h3>
                        <div class="contenedor-btns">

                            <a href="#" class="btn-outline-info">Mis Complejos</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section>
            <div class="row">
                <div class="col">
                    <div class=" m-2">
                        <h4 class="text-dark">Registro De Reservas</h4>
                    </div>
                </div>
            </div>

            <div class="card m-2">
                <div class="card-header py-2  bg-info">
                    <h5 class=" text-light">Busequeda de Reservas</h5>
                </div>
                <div class="card-body bg-dark">
                    <div class="row">

                        <div class="input-group col-12 col-sm-4 m-1">
                            <span class="input-group-text bg-info text-light">Deportes</span>
                            <input type="text" aria-label="Deportes" class="form-control">
                        </div>

                        <div class="input-group col-12 col-sm-4 m-1">
                            <span class="input-group-text bg-info text-light">Fechas</span>
                            <input type="date" aria-label="Fechas" class="form-control">
                        </div>


                        <div class="col-4 col-sm-3 m-1">

                            <a href="#" class="btn btn-outline-info">Buscar</a>
                        </div>

                    </div>

                </div>
            </div>
        </section>


        <section>


            <div class="card m-2">
                <div class="card-header py-2  bg-info"">
                <h5 class=" text-light">Mis Reservas</h5>
                </div>
                <div class="card-body bb ">
                    <div class="row">

                        <div class="box-body">
                            <table id="tabla_Reservas" class="table table-bordered table-condensed table-hover responsive" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">folio_reservas</th>
                                        <th class="text-center">Rut</th>
                                        <th class="text-center">Nombres</th>
                                        <th class="text-center">Cancha</th>
                                        <th class="text-center">Cantidad de hora</th>
                                        <th class="text-center">Fecha reservacion</th>
                                        <th class="text-center">Monto</th>
                                        <th class="text-center">Hora Empezar</th>
                                        <th class="text-center">Hora Termino</th>
                                        <th class="text-center" style="width: 10%;">Facturas</th>
                                    </tr>
                                    <tr>
                                        <?php
                                        $sqlcomple = "select * from complejosdeportivos where adminsitradores_rut_admin='" . $_SESSION['rut'] . "'  and estado_complejo=1";

                                        // $sqlcomple = "SELECT * FROM complejosdeportivos WHERE estado_complejo=1";
                                        $resulcomple = mysqli_query(conectar(), $sqlcomple);

                                        while ($datoscomple = mysqli_fetch_array($resulcomple)) {
                                        ?>
                                            <?php
                                            $sqlpro = "select * from canchas where complejosDeportivos_id_complejo='" . $datoscomple['id_complejo'] . "'  and estado_cancha=1";

                                            //$sqlpro = "SELECT * FROM canchas where estado_cancha=1";
                                            $resultpro = mysqli_query(conectar(), $sqlpro);


                                            while ($datospro = mysqli_fetch_array($resultpro)) {
                                            ?>
                                                <?php
                                                $sql = "select * from reservas where canchas_id_cancha='" . $datospro['id_cancha'] . "'";

                                                // $sqlcomple = "SELECT * FROM complejosdeportivos WHERE estado_complejo=1";
                                                $resulreservas = mysqli_query(conectar(), $sql);

                                                while ($datos = mysqli_fetch_array($resulreservas)) {
                                                ?>
                                    <tr>
                                        <td class="text-center"><?php echo $datos['folio_reserva']; ?></td>
                                        <td class="text-center"><?php echo $datos['usuarios_rut_usuario']; ?></td>
                                        <td class="text-center"><?php echo Buscarusu($datos['usuarios_rut_usuario']); ?></td>
                                        <td class="text-center"><?php echo $datos['canchas_id_cancha']; ?></td>
                                        <td class="text-center"><?php echo $datos['cantidad_hora_reserva']; ?></td>
                                        <td class="text-center"><?php echo $datos['fecha_reserva']; ?></td>
                                        <td class="text-center">$ <?php echo $datos['monto_total']; ?></td>
                                        <td class="text-center"><?php
                                                                if ($datos['estado_reserva'] == 0) {
                                                                ?>
                                                <img src="images/nook.png">
                                            <?php
                                                                } else {
                                            ?>
                                                <img src="images/ok.png">
                                            <?php
                                                                }
                                            ?>
                                        </td>

                                        <td class="text-center"><i class="fa-solid fa-receipt" style="font-size: 30px;"></i></td>
                                        <td class="text-center bg-dark"><input type="submit" name="pagar" value="Pagar" class="col-12 btn btn-outline-warning ">
                                        </td>


                                    </tr>
                                <?php
                                                }
                                ?>

                            <?php
                                            }
                            ?>
                        <?php
                                        }
                        ?>
                        </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>


                        </div>

                    </div>
                </div>



        </section>









        <div class="pt-5">

            <?php
            include "includes/footer.php";
            ?>
        </div>



        <script src="js/jquery.min.js"></script>
        <script src="js/popper.js"></script>

        <script src="js/owl.carousel.min.js"></script>
        <script src="js/main.js"></script>

        <script src="js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
<?php
} else {
    header("Location:index.php");
}
?>