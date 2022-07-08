<?php
session_start();
include "functions/db.php";
if (isset($_SESSION['usu'])) {
    if (isset($_GET['folio'])) {
        $sql = "select * from reservas where folio_reserva=" . $_GET['folio'];
        $res = mysqli_query(conectar(), $sql);
        $datosreserva = mysqli_fetch_array($res);
    }
    $sql = "select * from canchas where id_cancha=" . $datosreserva['canchas_id_cancha'];
    $resul = mysqli_query(conectar(), $sql);
    $datoscancha = mysqli_fetch_array($resul);
    $sqlpro = "select * from usuarios where rut_usuario='" . $_SESSION['rut'] . "'  and estado_usuario=1";
    $resultpro = mysqli_query(conectar(), $sqlpro);
    $datos = mysqli_fetch_array($resultpro);
?>

    <!doctype html>
    <html>

    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Pagar</title>
        <link href='' rel='stylesheet'>
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
        <style>
            body {
                font-family: Arial;
                font-size: 17px;
                padding: 8px;
            }

            * {
                box-sizing: border-box;
            }

            h2 {
                font-size: 40px;

            }

            .row {
                display: -ms-flexbox;
                /* IE10 */
                display: flex;
                -ms-flex-wrap: wrap;
                /* IE10 */
                flex-wrap: wrap;
                margin: 0 -16px;
            }

            .cd {
                background-color: rgba(255, 255, 255, 8);
               
            }

            .col-25 {
                -ms-flex: 25%;
                /* IE10 */
                flex: 25%;
            }

            .col-50 {
                -ms-flex: 50%;
                /* IE10 */
                flex: 50%;
            }

            .col-75 {
                -ms-flex: 75%;
                /* IE10 */
                flex: 75%;
            }

            .col-25,
            .col-50,
            .col-75 {
                padding: 0 16px;
            }

            .container {
                background-color: #f2f2f2;
                padding: 5px 20px 15px 20px;
                border: 1px solid lightgrey;
                border-radius: 3px;
            }

            input[type=text] {
                width: 100%;
                margin-bottom: 20px;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 3px;
            }

            label {
                margin-bottom: 10px;
                display: block;
            }

            .icon-container {
                margin-bottom: 20px;
                padding: 7px 0;
                font-size: 24px;
            }

            /* .btn {
            background: linear-gradient(to left, #99ccff 0%, #003399 100%);
            color: black;
            padding: 12px;
            margin: 10px 0;
            border: none;
            width: 30%;
            border-radius: 3px;
            cursor: pointer;
            font-size: 20px;
        }

        .btn:hover {
            background: linear-gradient(to left, #003399 0%, #99ccff 100%);
        } */

            p a {
                color: #219608;
                text-decoration: none;
            }

            hr {
                border: 1px solid lightgrey;
            }

            span.price {
                float: right;
                color: grey;
            }

            /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
            @media (max-width: 800px) {
                .row {
                    flex-direction: column-reverse;
                }

                .col-25 {
                    margin-bottom: 20px;
                }
            }
        </style>
        <script type='text/javascript' src=''></script>
        <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
        <script type='text/javascript' src=''></script>
        <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">

    </head>

    <body oncontextmenu='return false' class='snippet-body  bg-info'>

        <div class="row">
            <div class="col-75">
                <div class="container bg-gray">
                    <form action="">

                        <div class="row cd" >
                            <div class="col-12 col-sm-6">
                                <h3>Billing Address</h3>
                                <label for="fname"><i class="fa fa-user"></i>Nombre Completo</label>
                                <input type="text" id="fname" name="firstname" placeholder="">
                                <label for="email"><i class="fa fa-envelope"></i>Email</label>
                                <input type="text" id="email" name="email" placeholder=""><br>
                                <label for="adr"><i class="fa fa-address-card-o"></i>Direccion</label>
                                <input type="text" id="adr" name="adr" placeholder="">
                                <label for="ciudad"><i class="fa fa-institution"></i>Ciudad</label>
                                <input type="text" id="ciudad" name="ciudad" placeholder="">


                            </div>

                            <div class="col-12 col-sm-6">
                                <h3>Payment</h3>
                                <label for="fname">Tarjetas Aceptadas</label>
                                <div class="icon-container">
                                    <i class="fa fa-cc-visa" style="color:navy;"></i>
                                    <i class="fa fa-cc-amex" style="color:blue;"></i>
                                    <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                    <i class="fa fa-cc-discover" style="color:orange;"></i>
                                </div>
                                <label for="cname">Nombre</label>
                                <input type="text" id="cname" name="cardname" placeholder="">
                                <label for="ccnum">Número de Tarjeta</label>
                                <input type="text" id="ccnum" name="cardnumber" placeholder="">
                                <label for="expmonth">Mes de Exp.</label>
                                <input type="text" id="expmonth" name="expmonth" placeholder="">
                                <div class="row">
                                    <div class="col-50">
                                        <label for="expyear">Años Exp.</label>
                                        <input type="text" id="expyear" name="expyear" placeholder="">
                                    </div>
                                    <div class="col-50">
                                        <label for="cvv">CVV</label>
                                        <input type="text" id="cvv" name="cvv" placeholder="">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <input type="submit" value="Pagar Reserva" class="btn btn-outline-info">
                        <input type="reset" value="Cancelar" class="btn btn-outline-dark">
                    </form>
                </div>
            </div>
            <div class="col-25">
                <div class="container">
                    <p><a href="#">Canchas</a> <span class="price"><?php echo $datoscancha['nombre_cancha']; ?></span></p>
                    <p><a href="#">cantidad de hora</a> <span class="price"><?php echo  $datosreserva['cantidad_hora_reserva']; ?></span></p>
                    <p><a href="#">Precio</a> <span class="price">$<?php echo $datoscancha['precio_cancha']; ?></span></p>

                    <hr>
                    <p>Total <span class="price" style="color:black"><b>$<?php echo  $datosreserva['monto_total']; ?></b></span></p>
                </div>
            </div>
        </div>
        <script type='text/javascript'></script>
    </body>

    </html>
<?php
} else {
    header("Location:index.php");
}
?>