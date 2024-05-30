<?php
header('Content-Type: application/json');

$cedula = $_POST['cedula']; // Obtiene la cédula del parámetro de la solicitud

// Realiza la conexión a la base de datos
$conexion = new mysqli('localhost', 'root', '', 'bdfundey');

// Verifica si la conexión fue exitosa
if ($conexion->connect_error) {
    die("La conexión a la base de datos ha fallado: " . $conexion->connect_error);
}

// Realiza la consulta SQL
$query = "DELETE FROM persona WHERE cedula = ?";
$stmt = $conexion->prepare($query);
$stmt->bind_param("s", $cedula);

// Ejecuta la consulta
$stmt->execute();

// Verifica si la consulta fue exitosa
if ($stmt->error) {
    echo json_encode(['error' => "La consulta ha fallado: " . $stmt->error]);
} else {
    echo json_encode(['success' => true]);
}

// Cierra la consulta y la conexión
$stmt->close();
$conexion->close();
?>
