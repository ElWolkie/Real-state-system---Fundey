<?php
// archivo: obtener_personas.php
header('Content-Type: application/json');

// Realiza la conexión a la base de datos
$conexion = new mysqli('localhost', 'root', '', 'bdfundey');

// Verifica si la conexión fue exitosa
if ($conexion->connect_error) {
    die("La conexión a la base de datos ha fallado: " . $conexion->connect_error);
}

// Realiza la consulta SQL
$resultado = $conexion->query("SELECT * FROM persona");

// Verifica si la consulta fue exitosa
if (!$resultado) {
    die("La consulta ha fallado: " . $conexion->error);
}

// Recupera los datos y los almacena en un array
$personas = $resultado->fetch_all(MYSQLI_ASSOC);

// Cierra la conexión y retorna los datos en formato JSON
$conexion->close();
echo json_encode($personas);
?>
