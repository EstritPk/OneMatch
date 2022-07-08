<?php
include("db.php");
?>
<?php
if (isset($_GET['descarga'])) {
    header("Pragma: public");
    header("Expires: 0");
    $filename = "reportes.xls";
    header("Content-type: application/x-msdownload");
    header("Content-Disposition: attachment; filename=$filename");
    header("Pragma: no-cache");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
?>
    <table border="1" id="tabla_Reservas" class="table table-bordered table-condensed table-hover responsive" cellspacing="0" width="100%">
        <thead>
            <caption>Datos de la Reservas</caption>
            <tr>
                <th class="text-center">Folio</th>
                <th class="text-center">RUT</th>
                <th class="text-center">NOMBRES</th>
                <th class="text-center">CANCHA</th>
                <th class="text-center">CANTIDAD DE HORAS</th>
                <th class="text-center">Fecha reservacion</th>
                <th class="text-center">MONTO</th>
                <th class="text-center">Estado Pago</th>

            </tr>

            <?php
            $sql = "select * from reservas where usuarios_rut_usuario='" . $_GET['descarga'] . "'";

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
                            Nopagado
                        <?php
                                            } else {
                        ?>
                            Pagado
                        <?php
                                            }
                        ?>
                    </td>





                </tr>
            <?php
            }
            ?>
        </thead>
        <tbody>
        </tbody>
    </table>
    <?php

} else {
    if (isset($_GET['des'])) {
        header("Pragma: public");
        header("Expires: 0");
        $filename = "reportes_admin.xls";
        header("Content-type: application/x-msdownload");
        header("Content-Disposition: attachment; filename=$filename");
        header("Pragma: no-cache");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");

    ?>

        <table id="tabla_Reservas" class="table table-bordered table-condensed table-hover responsive" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th class="text-center">folio_reservas</th>
                    <th class="text-center">Rut</th>
                    <th class="text-center">Nombres</th>
                    <th class="text-center">Nombre Cancha</th>
                    <th class="text-center">Cantidad de hora</th>
                    <th class="text-center">Fecha reservacion</th>
                    <th class="text-center">Monto</th>

                    <th class="text-center">Estado pago</th>
                    <th class="text-center" style="width: 10%;">Facturas</th>
                </tr>
                <tr>
                    <?php
                    $sqlcomple = "select * from complejosdeportivos where adminsitradores_rut_admin='" . $_GET['des'] . "'  and estado_complejo=1";
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
                    <td class="text-center"><?php echo Buscarcancha($datos['canchas_id_cancha']); ?></td>
                    <td class="text-center"><?php echo $datos['cantidad_hora_reserva']; ?></td>
                    <td class="text-center"><?php echo $datos['fecha_reserva']; ?></td>
                    <td class="text-center">$ <?php echo $datos['monto_total']; ?></td>
                    <td class="text-center"><?php
                                            if ($datos['estado_reserva'] == 0) {
                                            ?>
                            Nopagado
                        <?php
                                            } else {
                        ?>
                            Pagado
                        <?php
                                            }
                        ?>
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


<?php
    }
}
?>