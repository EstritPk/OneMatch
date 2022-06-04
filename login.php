<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>

    <div class="container  ">

        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-5 ">


                <div class="login-wrap p-4 p-md-5 card posi center">

                    <form action="#" class="signin-form formulario">
                        <div class="form-group mt-3 contenedor-inputs">
                            <label class="form-control-placeholder" for="username">Username</label>
                            <input type="text" class="form-control" required>

                        </div>
                        <div class="form-group contenedor-inputs">
                            <label class="form-control-placeholder" for="password">Password</label>
                            <input id="password-field" type="password" class="form-control" required>
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn  rounded submit px-3">Ingresar</button>
                        </div>

                    </form>
                    <p class="text-center">No tiene cuenta? <a data-toggle="tab" href="#signup">Crear Cuenta</a></p>
                </div>

            </div>
        </div>
    </div>



    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>