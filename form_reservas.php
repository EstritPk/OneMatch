<!DOCTYPE html>
<html lang="en">

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

    <section class="">


        <div class=" card m-4">

            <div class="card-header py-2  bg-info">
                <h4 class="text-light"><i class="fa fa-calendar"></i>Haz tu reservas de canchas en minutos</h4>
            </div>

            <form  action="" id="reserva" class="needs-validation" method="POST" novalidate>
                <div class="card-body">

                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="card">
                                <div class="card-body border border-info">
                                    <h5 class="card-title">Datos del Usuario</h5>
                                    <div class="input-group col-12 col-sm-12 m-1">
                                        <span class="input-group-text bg-info text-light">Rut</span>
                                        <input type="text" aria-label="Rut" value="23456654-2" name="rut_usu" class="form-control" readonly>
                                    </div>
                                    <div class="input-group col-12 col-sm-12 m-1">
                                        <span class="input-group-text bg-info text-light">Nombres</span>
                                        <input type="text" aria-label="Nombres" value="Rickelson Bresume" name="nombre" class="form-control" readonly>
                                    </div>
                                    <div class="input-group col-12 col-sm-12 m-1">
                                        <span class="input-group-text bg-info text-light">correo</span>
                                        <input type="text" aria-label="Correo" value="Rickelson@gmail.com" name="gmail" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body border border-info">
                                    <h5 class="card-title">Datos de la cancha</h5>

                                    <div class="input-group col-12 col-sm-12 m-1">
                                        <span class="input-group-text bg-info text-light">IDCancha</span>
                                        <input type="text" aria-label="Rut" value="2345" name="rut_usu" class="form-control" readonly>
                                    </div>
                                    <div class="input-group col-12 col-sm-12 m-1">
                                        <span class="input-group-text bg-info text-light">Tipo Cancha</span>
                                        <input type="text" aria-label="Nombres" value="Football" name="nombre" class="form-control" readonly>
                                    </div>
                                    <div class="input-group col-12 col-sm-12 m-1">
                                        <span class="input-group-text bg-info text-light">Precio</span>
                                        <input type="text" aria-label="Precio" id="precio" value="24000" name="precio" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12">
                            <div class="card mt-2 border border-info">
                                <div class="card-body">
                                    <h5 class="card-title">Datos Reserva</h5>

                                    <div class="row">
                                        <div class="col-12 col-md-6 mb-3">
                                            <label for=fecha_reser" class="form-label">Fechas de reserva</label>
                                            <input type="Date" class="form-control" placeholder="" name="fecha_reser" id="fecha_reser " required>
                                        </div>
                                        <div class="col-12 col-md-6 mb-3">
                                            <label for="cantidad" class="form-label">Cantidade de hora</label>
                                            <input type="text" class="form-control" onblur=" calculaMonto();" placeholder="" id="cantidad" name="cantidad" required>
                                        </div>
                                        <div class="col-12 col-md-6 mb-3">
                                            <label for="Monto" class="form-label">Monto Apagar</label>
                                            <input type="text" class="form-control"  placeholder="" id="monto" name="Monto" readonly >
                                        </div>

                                        <div class="col-12 col-sm-6 mb-3">
                                            <label class="metodoPago">Tipo de eqipo</label>
                                            <select name="metodoPago" id="metodoPago" class="form-select" required>
                                                <option selected disabled value="">Seleccione metodo de pago</option>
                                                <option value="visa">visa</option>
                                                <option value="debito">Debito</option>
                                                <option value="Paypal">Paypal</option>
                                                <option value="Otro">Otro</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-info ">Confimar Resevacion</button>
                    <button type="reset" class="btn btn-gray">Cancelar</button>
                </div>

            </form>

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
    <script src="js/validaciones.js"></script>
    <script>
        function calculaMonto() {

            var precio = document.getElementById('precio').value;
            hora = document.getElementById('cantidad').value;
            document.getElementById('monto').value=precio* hora;
        }
    </script>
    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>