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
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
				<!--
					<li>
						<a href="user-search.php" style="font-size: 18px; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-weight:bold"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR USUARIO</a>
					</li>
				-->
				</ul>	
			</div>

	<script>
           $('ul.page-nav-tabs a').click(function(e){
                e.preventDefault();
                var url = $(this).attr('href');

                $('#contenido').hide().load(url, function() {
                    $(this).fadeIn('slow');
                    //REGISTRO
                    $(document).ready(function() {
                        $('#registroUsuario').submit(function(e) {
                            e.preventDefault();

                            $.post('../controller/ctl_usuario.php', $(this).serialize(), function(response) {
                                if (response.hasOwnProperty('error')) {
                                    // Si hay un error, muestra un mensaje de error con SweetAlert
                                    swal("Error!", "La cédula no está registrada en 'Persona' " + response.error, "error");
                                } else if (response.hasOwnProperty('success')) {
                                    // Si no hay errores, muestra un mensaje de éxito con SweetAlert
                                    swal("¡Éxito!", "Usuario registrado con éxito", "success");
                                    $('#registroUsuario')[0].reset(); // Limpia el formulario
                                }
                            }, 'json');
                        });
                    });
                    //LISTA
                    if (url == 'user-list.php') {
                        // Muestra el cuadro de búsqueda gradualmente
                        $('#search-box').fadeIn('slow');

                        $.getJSON('../model/obtener_usuarios.php', function(usuarios) {
                            var html = '';
                            for (var i = 0; i < usuarios.length; i++) {
                                html += '<tr class="text-center">';
                                html += '<td>' + (i + 1) + '</td>'; // Aquí usamos 'i + 1' para el conteo
                                html += '<th>' + usuarios[i].cedula + '</th>';
                                html += '<th>' + usuarios[i].username + '</th>';
                                html += '<th>' + usuarios[i].correo + '</th>';
                                html += '<th>' + usuarios[i].privilegio + '</th>';
                                html += '<th>' + usuarios[i].estatus + '</th>';
                                html += '<td><a href="#" class="btn btn-success"><i class="fas fa-sync-alt"></i></a></td>';
                                html += '<td><form action=""><button type="button" class="btn btn-warning"><i class="far fa-trash-alt"></i></button></form></td>';
                                html += '</tr>';
                            }
                            $('#contenido table tbody').html(html);

                            //BUSQUEDA
                            $('#search').on('keyup', function() {
                                var value = $(this).val().toLowerCase();
                                $('#contenido table tbody tr').filter(function() {
                                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                                });
                            });
                        });
                    } else {
                        // Oculta el cuadro de búsqueda gradualmente
                        $('#search-box').fadeOut('slow');
                    }
                });

                $('ul.page-nav-tabs a').removeClass('active');
                $(this).addClass('active');
            });

        	$(document).on('click', '.btn-success', function(e){
                e.preventDefault(); // Evita que el enlace se abra en una nueva página

                var fila = $(this).closest('tr'); // Obtiene la fila de la tabla que contiene el botón en el que se hizo clic
                var cedula = fila.find('th:eq(0)').text(); // Obtiene la cédula de la persona de la fila

                // Realiza una solicitud AJAX para obtener los datos de la persona con esta cédula
                $.getJSON('../model/obtener_usuario_por_cedula.php', { cedula: cedula }, function(usuarios) {
                    // Usa los datos de 'persona' para rellenar los campos del formulario en la ventana modal
                    $('#modal #cedula').val(usuarios.cedula);
                    $('#modal #username').val(usuarios.username);
                    $('#modal #password').val(usuarios.password);
                    $('#modal #correo').val(usuarios.correo);
                    $('#modal #privilegio').val(usuarios.privilegio);
                    $('#modal #estatus').val(usuarios.estatus);
                });

                $('#modal').modal('show'); // Abre la ventana modal
                
                $(document).on('submit', '#modal #miFormulario', function(e) {
					e.preventDefault(); // Evita que el formulario se envíe de la forma predeterminada

					// Realiza una solicitud AJAX para actualizar los datos del usuario
					$.post('../controller/actualizar_usuario.php', $(this).serialize(), function(response) {

						// Verifica la respuesta de la solicitud AJAX
						if (response.error) {
							// Si hay un error, muestra un mensaje de error
							alert('Error al actualizar el usuario: ' + response.error);
						} else {
							// Si no hay errores, cierra la ventana modal y actualiza la tabla
							$('#modal').modal('hide');
							swal("Usuario Actualizado!", "Se actualizaron los datos correctamente!", "success");
						}
					}, 'json'); // Respuesta JSON
				});
        	});
            $(document).on('click', '.btn-warning', function(e){
                e.preventDefault();

                var fila = $(this).closest('tr');
                var cedula = fila.find('th:eq(0)').text();

                swal({
                    title: "¿Estás seguro que deseas eliminarlo?",
                    text: "Una vez eliminado, no podrás recuperar esta fila!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $.post('../controller/eliminar_usuario.php', { cedula: cedula })
                            .done(function() {
                                fila.remove();
                                swal("¡El Usuario ha sido eliminado!", {
                                    icon: "success",
                                });
                            })
                            .fail(function() {
                                swal("¡Hubo un error al eliminar la fila!", {
                                    icon: "error",
                                });
                            });
                    } else {
                        swal("¡Tu fila está a salvo!");
                    }
                });
            });
    </script>

			<div id="search-box" style="text-align: right; display:none; padding: 15px;">
                <i class="fas fa-search fa-fw" style="padding-right: 8px;"></i><input type="text" id="search" placeholder="Buscar..." style="padding: 5px; border-radius: 5px; border: 1px solid #ccc; width: 200px;">
            </div>

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

  <!-- Ventana Modal de Actualizar Datos -->      
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="modalLabel" style="font-weight: bold;">Actualizar Usuario</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"></span>
        </button>
      </div>
      <form class="form-neon" autocomplete="off" method="POST" id="miFormulario">
		<legend><i class="fas fa-user-lock"></i> &nbsp; Información de la cuenta</legend>
			<div class="container-fluid">
					<div class="row">
						<div class="col-12 col-md-6">
							<div class="form-group">
								<label for="cedula" class="bmd-label-floating">Cédula:</label>
								<input type="text" pattern="[0-9-]{1,20} /^[0-9]+$/" class="form-control" name="cedula" id="cedula" maxlength="8"
								oninput="return (event.target.value = event.target.value.replace(/[^0-9]/g, ''))" readonly style="background-color: #f9f9f9; border-radius:5px; padding:5px;">
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="form-group">
								<label for="username" class="bmd-label-floating">Nombre de usuario:</label>
								<input type="text" pattern="[a-zA-Z0-9]{1,35}" class="form-control" name="username" id="username" maxlength="20">
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="form-group">
								<label for="password" class="bmd-label-floating">Contraseña:</label>
								<input type="password" class="form-control" name="password" id="password" maxlength="20"> 
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="form-group">
								<label for="correo" class="bmd-label-floating">Correo:</label>
								<input type="email" class="form-control" name="correo" id="correo" maxlength="30">
							</div>
						</div>
					</div>
				<br>
				<fieldset>
				<legend><i class="fas fa-medal"></i> &nbsp; Nivel de privilegio</legend>
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<p><span class="badge badge-info">Coordinador</span> Permisos para registrar, actualizar y eliminar</p>
							<p><span class="badge badge-success">Asistente</span> Permisos para registrar y actualizar</p>
							<div class="form-group">
								<select class="form-control" name="privilegio" id="privilegio" style="background-color: #f9f9f9; border-radius:5px; padding:5px;">
									<option value="" disabled="">Seleccione una opción</option>
									<option value="Coordinador">Coordinador</option>
									<option value="Asistente">Asistente</option>
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
								<select class="form-control" name="estatus" id="estatus">
									<option value="" disabled="">Seleccione una opción</option>
									<option value="Activo">Activo</option>
									<option value="Inactivo">Inactivo</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				</fieldset>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-primary">Guardar cambios</button>
			</div>
</form>
    </div>
  </div>
</div>

</body>
</html>