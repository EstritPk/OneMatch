<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include "functions/db.php";
if (isset($_SESSION['usu'])) {
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Las Canchas</title>
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
                        <h2 class="primera_linea">Complejo deportivo los Angeles</h2>
                        <h3 class="segunda_linea">"Los campeones siguen jugando hasta que lo hacen bien".</h3>
                        <div class="contenedor-btns">
                            <a href="admin_reservas.php" class=" btn btn-outline-info">Mis reservas</a>
                            <a href="canchas.php" class="btn-outline-info">Mis canchas</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="row">
            <div class="col">
                <div class="border-bottom">
                    <h3 class="text-dark text-center">Mis complejos</h3>
                </div>
            </div>
        </div>
        <div class="row py-3 m-5 bg-dark">
            <div class="col">
                <a href="form_complejo.php" class="btn btn-outline-info" style="font-size: 20px;">Agregar nuevo complejo<i class="fa-solid fa-circle-plus p-2" style="font-size: 20px;"></i></a>
            </div>
        </div>
        <div class="row m-4">
            <div class="row py-3">
                <?php
                $sqlcomple = "select * from complejosdeportivos where adminsitradores_rut_admin='" . $_SESSION['rut'] . "'  and estado_complejo=1";
                $sqlcomple = "select * from complejosdeportivos where  estado_complejo=1";
                // $sqlcomple = "SELECT * FROM complejosdeportivos WHERE estado_complejo=1";
                $resulcomple = mysqli_query(conectar(), $sqlcomple);
                while ($datoscomple = mysqli_fetch_array($resulcomple)) {
                ?>
                    <div class=" col-6 col-sm-6 col-lg-3 mb-2">
                        <div class="card card-block" style=" max-width: 20rem; ">
                            <div class="">
                                <a href="#" class="block-20 d-flex align-items-start" style="background-image: url('images/fotos/<?php echo $datoscomple['imagen_complejo']; ?>');">
                                </a>
                                <a href="#!">
                                    <div style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold"><a><?php echo $datoscomple['nombre_complejo']; ?></a></h5>
                                <p class="mb-1"></p>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the
                                    card's content.
                                </p>
                                <a href="modificar_complejo.php?idcomple=<?php echo $datoscomple['id_complejo']; ?>" class="btn btn-outline-success p-md-1 mb-0">Modificar</a>
                                <a href="functions/crud_complejo.php?compleli=<?php echo $datoscomple['id_complejo']; ?>" class="btn btn-outline-danger p-md-1 mb-0">
                                <button class="btn btn-outline-danger" onclick="return confimarEliminar();">Eliminar</button></a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="border-bottom">
                    <h3 class="text-dark text-center">Mis Canchas</h3>
                </div>
            </div>
        </div>
        <div class="row py-3 m-5 bg-dark">
            <div class="col">
                <a href="form_cancha.php" class="btn btn-outline-info" style="font-size: 20px;">Agregar nueva cancha<i class="fa-solid fa-circle-plus p-2" style="font-size: 20px;"></i></a>
            </div>
        </div>
        <div class="  row   m-4">
            <div class="row ">
                <?php
                $sqlcomple = "select * from complejosdeportivos where adminsitradores_rut_admin='" . $_SESSION['rut'] . "'  and estado_complejo=1";
                $sqlcomple = "select * from complejosdeportivos where  estado_complejo=1";
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
                        <div class="col-6 col-sm-6 col-lg-3 mb-4">
                            <div class="card" style="max-width: 19rem;">
                            <a href="#" class="block-20 d-flex align-items-start" style="background-image: url('images/fotos/<?php echo $datospro['imagen_cancha']; ?>');">
                                </a>
                                <div class="card-body">
                                    <h4 class="card-title">Cancha <?php echo $datospro['nombre_cancha']; ?></h4>
                                    <p class="card-text "><?php echo $datospro['dimension_cancha']; ?>,
                                        <?php echo $datoscomple['direccion_complejo']; ?>, Complejos <?php echo $datoscomple['nombre_complejo']; ?> </p>
                                    <p class="ml-auto meta2 m-3">
                                        <a href="#" class="mr-2">Precio</a>
                                        <a href="#" class="meta-chat"><?php echo $datospro['precio_cancha']; ?> x hora</a>
                                    </p>
                                    <p>
                                        <a href="functions/crud_cancha.php?ideliminar=<?php echo $datospro['id_cancha']; ?>" class=""><button class="btn btn-outline-danger" onclick="return confimarEliminar();">Eliminar</button></a>
                                        <a href="modificar_cancha.php?idcancha=<?php echo $datospro['id_cancha']; ?>" class="btn btn-sm btn-success">Modificar</a>
                                        <a href="detalle_cancha.php?idcancha=<?php echo $datospro['id_cancha']; ?>" class="btn btn-sm btn-secondary"  >Detalles</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                <?php
                }
                ?>
                <!-- Button trigger modal -->
                <!--<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Detalles</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row mt-3 form shadow-lg p-3 mb-1  rounded card">
                                    <div class="card-header text-center bg-info">
                                        <h5 class="">Detalles de la Cancha</h5>
                                        <span>Color:</span><input type="text" id="codigo" />
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <img class="card-img-top" src="images/<?php //echo $datospro['imagen_cancha']; ?>" alt="">
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <table class="table table-bordered border-info">
                                                <thead>
                                                    <tr>
                                                        <th scope="col"></th>
                                                        <th scope="col">Datos</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Dimencion</th>
                                                        <td><?php //echo $datospro['dimension_cancha']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Precio</th>
                                                        <td>$<?php //echo $datospro['precio_cancha']; ?> x hora</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Complejos deportivos</th>
                                                        <td><?php //echo $datoscomple['nombre_complejo']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Direccion</th>
                                                        <td><?php //echo $datoscomple['direccion_complejo'];; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Horario</th>
                                                        <td><?php //echo $datoscomple['horario_complejo'];; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Estados</th>
                                                        <td>Disponible</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Tipos de Cancha</th>
                                                        <td><?php //echo $datospro['tipo_cancha']; ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
        <div class="pt-5">
            <?php
            include "includes/footer.php";
            ?>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/main.js"></script>
        <script type="text/javascript">
                function confimarEliminar(){
                   var respuesta=confirm("Estas Seguro que deseas eliminarlo");
                   if(respuesta==true) {
                    return true;
                   }else{
                    return false;
                   }
                }
            </script>
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>
<?php
} else {
    header("Location:index.php");
}
?>