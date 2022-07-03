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
            <caption >Datos de la Reservas</caption>
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
            $sql = "select * from reservas where usuarios_rut_usuario='" .$_GET['descarga']. "'";

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
  
}
?>