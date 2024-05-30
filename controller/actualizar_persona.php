<?php
header('Content-Type: application/json');

$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$sexo = $_POST['sexo'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];

// Realiza la conexión a la base de datos
$conexion = new mysqli('localhost', 'root', '', 'bdfundey');

// Verifica si la conexión fue exitosa
if ($conexion->connect_error) {
    echo json_encode(['error' => "La conexión a la base de datos ha fallado: " . $conexion->connect_error]);
    exit;
}

// Prepara la consulta SQL
$stmt = $conexion->prepare("UPDATE persona SET nombre = ?, apellido = ?, sexo = ?, telefono = ?, direccion = ? WHERE cedula = ?");
$stmt->bind_param("ssssss", $nombre, $apellido, $sexo, $telefono, $direccion, $cedula);

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
