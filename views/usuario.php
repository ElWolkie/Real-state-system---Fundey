<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Fecha en el pasado
    // redirige al usuario a la página de inicio de sesión
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo_fundey.png">
	  <script src="https://kit.fontawesome.com/1da90de8c0.js" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<title>Usuario</title>

    <style>
        .active {
        color: red;
        }
        ul.page-nav-tabs li {
            background-color: #f8f9fa; /* Color de fondo */
            margin-bottom: 10px; /* Espacio entre los elementos */
            border-radius: 5px; /* Bordes redondeados */
        }

        ul.page-nav-tabs li a {
            display: block; /* Hace que todo el elemento <li> sea clickeable */
            padding: 10px; /* Espacio interior */
            color: #343a40; /* Color del texto */
            text-decoration: none; /* Elimina el subrayado del enlace */
        }

        ul.page-nav-tabs li a:hover {
            background-color: #e9ecef; /* Color de fondo al pasar el mouse */
        }

      </style>

	<!-- Normalize V8.0.1 -->
	<link rel="stylesheet" href="./css/normalize.css">

	<!-- Bootstrap V4.3 -->
	<link rel="stylesheet" href="./css/bootstrap.min.css">

	<!-- Bootstrap Material Design V4.0 -->
	<link rel="stylesheet" href="./css/bootstrap-material-design.min.css">

	<!-- Font Awesome V5.9.0 -->
	<link rel="stylesheet" href="./css/all.css">

	<!-- Sweet Alerts V8.13.0 CSS file -->
	<link rel="stylesheet" href="./css/sweetalert2.min.css">

	<!-- Sweet Alert V8.13.0 JS file-->
	<script src="./js/sweetalert2.min.js" ></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<link rel="stylesheet" href="./css/jquery.mCustomScrollbar.css">
	
	<!-- General Styles -->
	<link rel="stylesheet" href="./css/style.css">


</head>
<body>
	
	<!-- Main container -->
	<main class="full-box main-container">
		<!-- Nav lateral -->
		<section class="full-box nav-lateral">
			<div class="full-box nav-lateral-bg show-nav-lateral"></div>
			<div class="full-box nav-lateral-content">
			<!-- Incluir Navegacion, Nombre de usuario y Privilegio -->
				<?php include 'navegacion.php'; ?>
			</div>
		</section>

		<!-- Page content -->
		<section class="full-box page-content">
			<nav class="full-box navbar-info">
				<a href="#" class="float-left show-nav-lateral">
					<i class="fas fa-exchange-alt"></i>
				</a>
			</nav>

			<!-- Page header -->
			<div class="full-box page-header">
				<h3 class="text-left">
					<i class="fas fa-user-circle"></i> &nbsp;<span style="font-size: 25px; font-family: Verdana, Geneva, Tahoma, sans-serif;">USUARIO</span>
				</h3>
			</div>
			
			<div class="container-fluid">
				<ul class="full-box list-unstyled page-nav-tabs">
					<li>
						<a href="user-new.php" style="font-size: 18px; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-weight:bold"><i class="fas fa-plus fa-fw" ></i> &nbsp; NUEVO USUARIO</a>
					</li>
					<li>
						<a href="user-list.php" style="font-size: 18px; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-weight:bold"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE USUARIOS</a>
					</li>
					<li>
						<a href="user-search.php" style="font-size: 18px; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-weight:bold"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR USUARIO</a>
					</li>
				</ul>	
			</div>

			<script>
                $(document).ready(function(){
                $('ul.page-nav-tabs a').click(function(e){
                    e.preventDefault(); // Evita que el enlace se abra en una nueva página
                    var url = $(this).attr('href'); // Obtiene la URL del enlace

                    $('#contenido').hide().load(url, function() {
                        $(this).fadeIn('slow'); // Hace que el contenido aparezca gradualmente
                    });

                    $('ul.page-nav-tabs a').removeClass('active'); // Quita la clase 'active' de todos los enlaces
                    $(this).addClass('active'); // Añade la clase 'active' al enlace en el que se hizo clic
                });
            });

            $(document).ready(function(){
                $(document).on('click', '.btn-success', function(e){
                    e.preventDefault(); // Evita que el enlace se abra en una nueva página

                    $('#modal').modal('show'); // Abre la ventana modal
                });
            });
			</script>

			<div id="contenido">
				<!--Se imprimen el contenido de los enlaces -->
			</div>
		
		</section>
	</main>
	
	
	<!-- jQuery V3.4.1 -->
	<script src="./js/jquery-3.4.1.min.js" ></script>

	<!-- popper -->
	<script src="./js/popper.min.js" ></script>

	<!-- Bootstrap V4.3 -->
	<script src="./js/bootstrap.min.js" ></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<script src="./js/jquery.mCustomScrollbar.concat.min.js" ></script>

	<!-- Bootstrap Material Design V4.0 -->
	<script src="./js/bootstrap-material-design.min.js" ></script>
	<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>

	<script src="./js/main.js" ></script>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
	  <h3 class="modal-title" id="modalLabel" style="font-weight: bold;">Actualizar Usuario</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"></span>
        </button>
      </div>
    <div class="modal-body">
    <div class="container-fluid">
	<form action="" class="form-neon" autocomplete="off">
		<fieldset>
			<b><legend><i class="far fa-address-card"></i> &nbsp; Información del Usuario</legend></b><br>
			<b><div class="container-fluid">
            <form action="" class="form-neon" autocomplete="off">
					<br>
					<fieldset>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="usuario_usuario" class="bmd-label-floating">Nombre de usuario</label>
										<input type="text" pattern="[a-zA-Z0-9]{1,35}" class="form-control" name="usuario_usuario" id="usuario_usuario" maxlength="20" required>
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="usuario_email" class="bmd-label-floating">Email</label>
										<input type="email" class="form-control" name="usuario_email" id="usuario_email" maxlength="30" required>
									</div>
								</div>
								<div class="col-12">
									<legend style="margin-top: 40px;"><i class="fas fa-lock"></i> &nbsp; Nueva contraseña</legend>
									<p>Para actualizar la contraseña de esta cuenta ingrese una nueva y vuelva a escribirla. En caso que no desee actualizarla debe dejar vacíos los dos campos de las contraseñas.</p>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="usuario_clave_nueva_1" class="bmd-label-floating">Contraseña</label>
										<input type="password" class="form-control" name="usuario_clave_nueva_1" id="usuario_clave_nueva_1" maxlength="20">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="usuario_clave_nueva_2" class="bmd-label-floating">Repetir contraseña</label>
										<input type="password" class="form-control" name="usuario_clave_nueva_2" id="usuario_clave_nueva_2" maxlength="20">
									</div>
								</div>
							</div>
						</div>
					</fieldset>
					<br>
					<fieldset>
						<legend><i class="fas fa-medal"></i> &nbsp; Nivel de privilegio</legend>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12">
									<p><span class="badge badge-info">Control total</span> Permisos para registrar, actualizar y eliminar</p>
									<p><span class="badge badge-success">Edición</span> Permisos para registrar y actualizar</p>
									<p><span class="badge badge-dark">Registrar</span> Solo permisos para registrar</p>
									<div class="form-group">
										<select class="form-control" name="usuario_privilegio" required>
											<option value="" selected="" disabled="">Seleccione una opción</option>
											<option value="1">Control total</option>
											<option value="2">Edición</option>
											<option value="3">Registrar</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</fieldset>
					<br>
					<fieldset>
						<legend><i class="fas fa-user-check"></i> &nbsp; Estatus</legend>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12">
									<div class="form-group">
										<select class="form-control" name="usuario_privilegio" required>
											<option value="" selected="" disabled="">Seleccione una opción</option>
											<option value="Activo">Activo</option>
											<option value="Inactivo">Inactivo</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</fieldset>
				</form>
				<br>
</div>
</b>
		</fieldset>
	</form>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>