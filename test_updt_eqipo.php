<?php

session_start();
include("functions/db.php");
/*
if (isset($_SESSION['usu'])) {
    if (isset($_GET['rut_usu'])) {
        $sql = "SELECT * FROM usuario WHERE rut_usuario=" . $_GET['rut_usu'];
        $result = mysqli_query(conectar(), $sql);
        $datos = mysqli_fetch_array($result);
    }
    */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario MODIFCAR Equipo</title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/b8c0c93cb3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/form.css">
    <script src="js/validaciones.js"></script>
</head>

<body>
    <!-- DEBO HACER CRUD -->

    <body>
        <div class="pt-5">
            <?php
            include "includes/header.php";
            ?>
        </div>
        <div class="container ">
            <div class="row mt-3 form shadow-lg p-3 mb-5  rounded card">
                <div class="card-header text-center bg-info">
                    <h2 class="">Modificar de Equipo</h2>
                </div>
                <div class="col mt-3">
                    <form class="needs-validation" name="formequipo" action="functions/crud_equipo.php" method="POST">
                        <div class="row">
                            <div class="col-12 col-md-6 mb-3">
                                <label for="nombre_equ" class="form-label">Nombre del Equipo</label>
                                <input type="text" class="form-control" placeholder="Mala Leche" name="nombre_equ" id="nombre_equ">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="nomina_equ" class="form-label">Nomina</label>
                                <input type="number" class="form-control" placeholder="Mala Leche" value="nomina_equ" id="nomina_equ" name="nomina_equ">
                            </div>

                            <div class="col-12 col-md-6 mb-3">
                                <label for="descripcion_equ" class="form-label">Descripcion</label>
                                <textarea value="descripcion_equ" name="descripcion_equ" id="descripcion_equ" class="form-control"></textarea>
                            </div>
                            <div class="col-12 col-sm-6 mb-3">

                                <label class="form-label">Deportes</label>
                                
                                <select name="deporte_equ" id="deporte_equ" class="form-select">
                                <?php
                                 $sqlpro = "SELECT * FROM deportes";
                                $resultpro = mysqli_query(conectar(), $sqlpro);
                                while ($datospro = mysqli_fetch_array($resultpro)) {
                                ?>
                                    <option value="<?php echo $datospro['id_deporte']; ?>"><?php echo $datospro['nombre_deporte']; ?></option>
                                    
                                    <?php
                                }
                                ?>
                                </select>
                                
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <div>
                                    <div class="form-check mb-3">
                                        <input type="checkbox" name="terminos" id="terminos" class="form-check-input">
                                        <label for="terminos" class="form-check-label">Acepto los terminos y condiciones</label>
                                    </div>
                                    <button type="submit" class="col-12 btn btn-info button">Registrar</button>
                                    <div class="row" style="margin-left: 110px;">
                                        <button type="button"  class="btn btn-primary" style="min-width: 150px;" id="btn" value="Crear" onclick="validarform_usuario(this.value)">
                                            Registrar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" class="form-control" id="frmaccion" name="frmaccion">
                        <input type="hidden" class="form-control" id="idc" name="iusu" value="<?php echo $datos['usuario']; ?>">
                    </form>
                    <div class="container" style="margin-left: 207px;">
                        <table id="grilla" class="table table-striped table-hover bg-light border border-primary">
                            <tr>
                                <th>ID</th>
                                <th>NOMBRE DEL EQUIPO</th>
                                <th>NOMINA</th>
                                <th>DESCRIPCION</th>
                                <th>IMAGEN</th>
                                <th>DEPORTTE</th>
                            </tr>
                        </table>
                        <!-- 
                        id_equipo
                        nombre_equipo
                        nomina_equipo
                        descripcion_equipo
                        estado_equipo
                        imagen_equipo
                        deportes_id_deporte  
                        -->
                        
                    </div>
                </div>
            </div>
        </div>
        <?php
        include "includes/footer.php";
        ?>
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>

</html>
<?php
/*
} else {
    
    header("Location:home.php");
    
}
*/
?>