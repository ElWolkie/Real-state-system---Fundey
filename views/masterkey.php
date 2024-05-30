<?php
include("conexion.php");

date_default_timezone_set('America/Caracas');

// Genera la clave maestra
$year = substr(date('Y'), 0, 2);
$month = date('m');
$day = date('d');
$hour = date('H');
$personalkey = "admin";
$masterKey = $year . $month . $day . $hour . $personalkey;

// Consulta SQL para actualizar la clave maestra
$sql = "UPDATE usuario SET password = '$masterKey' WHERE id = 1";

// Ejecuta la consulta
mysqli_query($conn, $sql);

// Cierra la conexión
mysqli_close($conn);
?>