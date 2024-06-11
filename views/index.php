<?php
session_start();
include("masterkey.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" type="image/x-icon" href="img/logo_fundey.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv= "content-type" content="text/html;charset= ISO-8859-1">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/js/bootstrap.min.js">

    <!-- Sweet Alerts V8.13.0 CSS file -->
    <link rel="stylesheet" href="css/sweetalert2.min.css">

    <!-- Sweet Alert V8.13.0 JS file-->
    <script src="js/sweetalert2.min.js" ></script>

    <!-- Sweet Alert file-->
    <script src="js/sweetalert.min.js" ></script>

  <title>Fun! Day</title>

    <link rel="stylesheet" type="text/css" href="css/alan.css">
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-in-container">
            <form action="login.php" id="loginForm" autocomplete="off" method="POST">
                <h1>Iniciar Sesión</h1>
                <br>
                <span>Inicie sesión con una cuenta existente</span>
                <input id="username" name="username" type="text" placeholder="Usuario" maxlength="20" style="font-family:Verdana, Geneva, Tahoma, sans-serif"/>
                <input id="password" name="password" type="password" maxlength="20" placeholder="Contraseña" style="font-family:Verdana, Geneva, Tahoma, sans-serif" />
                <br>
                <button type="submit">Entrar</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1 style="text-shadow: 2px 2px 1.5px black;">Bienvenido!</h1>
                    <p style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 20px; text-shadow: 2px 2px 1.5px black;">Introduce tus datos personales y comienza tu viaje</p>
                </div>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            // Obtén los valores de los campos de entrada
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;

            // Valida que los campos no estén vacíos
            if(username === '' || password === '') {
                swal("Error al Iniciar Sesión", "Completa todos los campos por favor", "error");
                event.preventDefault(); // Evita que el formulario se envíe
            }
        });
    });
    </script>

    <script>
    // Verifica si hay un mensaje de error en la sesión
    document.addEventListener('DOMContentLoaded', function() {
        <?php if(isset($_SESSION['error'])): ?>
            // Muestra el mensaje de error con SweetAlert
            swal("Error al Iniciar Sesión", "<?php echo $_SESSION['error']; ?>", "error");

            // Elimina el mensaje de error de la sesión
            <?php unset($_SESSION['error']); ?>
        <?php endif; ?>
    });
    </script>


    <footer>
        <script src="js/pruebaindex.js"></script>
    </footer>
</body>
</html>