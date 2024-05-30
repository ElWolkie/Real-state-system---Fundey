<?php
session_start();
include("conexion.php");

// Obtiene los datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];

// Prepara la consulta SQL
$stmt = $conn->prepare("SELECT * FROM usuario WHERE username = ? AND password = ?");
$stmt->bind_param("ss", $username, $password);

// Ejecuta la consulta
$stmt->execute();

// Obtiene los resultados
$result = $stmt->get_result();

// Verifica si se encontró algún resultado
if ($result->num_rows > 0) {
    // Obtiene los detalles del usuario
    $usuario = $result->fetch_assoc();

    // Almacena los detalles del usuario en la sesión
    $_SESSION['usuario'] = $usuario;

    // Indica que el usuario ha iniciado sesión
    $_SESSION["loggedin"] = true;

    // Redirige al usuario a home.php
    header('Location: home.php');
} else {
    $_SESSION['error'] = "Usuario o contraseña incorrectos.";
    header('Location: index.php');
}

// Cierra la conexión
$stmt->close();
$conn->close();
?>
