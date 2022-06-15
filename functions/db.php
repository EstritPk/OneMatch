<?php

function conectar()
{
    $conn=mysqli_connect("localhost","root","root","onematch");
    return $conn;
}


?>

