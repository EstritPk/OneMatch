<?php
function conectar()
{
    $conn = mysqli_connect("localhost", "root", "root", "onematch");
    return $conn;
}
function fechahoy()
{
    date_default_timezone_set('America/Santiago');
    $fecha = date('Y-m-d');
    return $fecha;
}

function hora()
{
    date_default_timezone_set('America/Santiago');
    $hora = date('H:i:s');
    return $hora;
}


function fechabd($fecha)
{
    $dia = substr($fecha, 8, 2);
    $mes = substr($fecha, 5, 2);
    $anho = substr($fecha, 0, 4);
    $fechabd = $dia . "-" . $mes . "-" . $anho;
    //$fechabd = $anho . "-" . $mes . "-" . $dia;
    return $fechabd;
}

function fechaesp($fecha)
{
    $dia = substr($fecha, 8, 2);
    $mes = substr($fecha, 5, 2);
    $anho = substr($fecha, 0, 4);
    $fechaesp = $anho . "-" . $mes . "-" . $dia;
    return $fechaesp;
}
function Buscarusu($rut)
{
    $sql = "select * from usuarios where rut_usuario='" . $rut. "' ";
    $result = mysqli_query(conectar(), $sql);
   
    $datos = mysqli_fetch_array($result);
    return $datos['nombre_usuario']." ".$datos['apellido_p_usuario'];
}
