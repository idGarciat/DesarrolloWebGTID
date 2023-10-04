<?php
$con = new mysqli("localhost", "root", "", "bd_hotel");

if ($con->connect_error) {
    die("Conexion fallida" . $con->connect_error);
    echo "Conexion fallida";
}
?>