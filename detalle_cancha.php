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
                            <a href="admin_canchas.php" class="btn-outline-info">Mis Complejos</a>
                        </div>
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
        <!--<script type="text/javascript">
                function confimarEliminar(){
                   var respuesta=confirm("Estas Seguro que deseas eliminarlo");
                   if(respuesta==true) {
                    return true;
                   }else{
                    return false;
                   }
                }
            </script>-->
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>
<?php
} else {
    header("Location:index.php");
}
?>