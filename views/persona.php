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
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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

	<title>Persona</title>

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
					<i class="fa-solid fa-user-large"></i> &nbsp;<span style="font-size: 25px; font-family: Verdana, Geneva, Tahoma, sans-serif;">PERSONA</span>
				</h3>
			</div>
			
			<div class="container-fluid">
				<ul class="full-box list-unstyled page-nav-tabs">
					<li>
						<a href="persona-new.php" style="font-size: 18px; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-weight:bold"><i class="fas fa-plus fa-fw"></i> &nbsp; NUEVA PERSONA</a>
					</li>
					<li>
						<a href="persona-list.php" style="font-size: 18px; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-weight:bold"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE PERSONAS</a>
					</li>
				<!--<li>
						<a href="persona-search.php" style="font-size: 18px; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-weight:bold"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR PERSONA</a>
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

                    $(document).ready(function() {
                        $('#registroPersona').submit(function(e) {
                            e.preventDefault();

                            $.post('../controller/ctl_persona.php', $(this).serialize(), function(response) {
                                if (response.hasOwnProperty('error')) {
                                    // Si hay un error, muestra un mensaje de error con SweetAlert
                                    swal("Error!", "No se pudo registrar los datos: " + response.error, "error");
                                } else if (response.hasOwnProperty('success')) {
                                    // Si no hay errores, muestra un mensaje de éxito con SweetAlert
                                    swal("¡Éxito!", "Persona registrada con éxito", "success");
                                    $('#registroPersona')[0].reset(); // Limpia el formulario
                                }
                            }, 'json');
                        });
                    });

                    if (url == 'persona-list.php') {
                        // Muestra el cuadro de búsqueda gradualmente
                        $('#search-box').fadeIn('slow');

                        $.getJSON('../model/obtener_personas.php', function(personas) {
                            var html = '';
                            for (var i = 0; i < personas.length; i++) {
                                html += '<tr class="text-center">';
                                html += '<td>' + (i + 1) + '</td>'; // Aquí usamos 'i + 1' para el conteo
                                html += '<th>' + personas[i].cedula + '</th>';
                                html += '<th>' + personas[i].nombre + '</th>';
                                html += '<th>' + personas[i].apellido + '</th>';
                                html += '<th>' + personas[i].sexo + '</th>';
                                html += '<th>' + personas[i].telefono + '</th>';
                                html += '<th>' + personas[i].direccion + '</th>';
                                html += '<td><a href="#" class="btn btn-success"><i class="fas fa-sync-alt"></i></a></td>';
                                html += '<td><form action=""><button type="button" class="btn btn-warning"><i class="far fa-trash-alt"></i></button></form></td>';
                                html += '</tr>';
                            }
                            $('#contenido table tbody').html(html);

                            // Aquí agregas el código de búsqueda
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
                $.getJSON('../model/obtener_persona_por_cedula.php', { cedula: cedula }, function(personas) {
                    // Usa los datos de 'persona' para rellenar los campos del formulario en la ventana modal
                    $('#modal #cedula').val(personas.cedula);
                    $('#modal #nombre').val(personas.nombre);
                    $('#modal #apellido').val(personas.apellido);
                    $('#modal #sexo').val(personas.sexo);
                    $('#modal #telefono').val(personas.telefono);
                    $('#modal #direccion').val(personas.direccion);
                });

                $('#modal').modal('show'); // Abre la ventana modal
                
                $('#modal #miFormulario').submit(function(e){
                e.preventDefault(); // Evita que el formulario se envíe de la forma predeterminada

                // Realiza una solicitud AJAX para actualizar los datos de la persona
                $.post('../controller/actualizar_persona.php', $(this).serialize(), function(response) {
                
                    // Verifica la respuesta de la solicitud AJAX
                    if (response.error) {
                        // Si hay un error, muestra un mensaje de error
                        alert('Error al actualizar la persona: ' + response.error);
                    } else {
                        // Si no hay errores, cierra la ventana modal y actualiza la tabla
                        $('#modal').modal('hide');
                        swal("Persona Actualizada!", "Se actualizaron los datos correctamente!", "success");
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
                        $.post('../controller/eliminar_persona.php', { cedula: cedula })
                            .done(function() {
                                fila.remove();
                                swal("¡La persona ha sido eliminada!", {
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
        <h3 class="modal-title" id="modalLabel" style="font-weight: bold;">Actualizar Persona</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"></span>
        </button>
      </div>
      <form class="form-neon" autocomplete="off" method="POST" id="miFormulario">
            <div class="modal-body">
            <div class="container-fluid">
                <fieldset>
                <b><legend><i class="far fa-address-card"></i>   Información personal</legend></b><br>
                <b><div class="container-fluid">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="cedula" class="label-floating">Cédula:</label>
                                <input type="text" pattern="[0-9-]{1,20} /^[0-9]+$/" class="form-control" name="cedula" id="cedula" maxlength="8" readonly>
                            </div>
                        </div>
                        
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="nombre" class="label-floating">Nombre:</label>
                                <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}" class="form-control" name="nombre" id="nombre" maxlength="25" readonly>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="apellido" class="label-floating">Apellido:</label>
                                <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}" class="form-control" name="apellido" id="apellido" maxlength="25" readonly>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="sexo" class="label-floating">Sexo:</label>
                                <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}" class="form-control" name="sexo" id="sexo" maxlength="9" readonly>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="telefono" class="label-floating">Teléfono:</label>
                                <input type="text" pattern="[0-9()+]{1,20}" class="form-control" name="telefono" id="telefono" maxlength="12"required oninput="formatTelefono(this)">
                            </div>

                            <script>
                            //Funcion de 4 digitos Telefono
                            function formatTelefono(input) {
                            var num = input.value.replace(/\D/g,'');
                            if(num.length > 4) {
                                input.value = num.substring(0,4) + '-' + num.substring(4);
                            } else {
                                input.value = num;
                            }
                        }
                        </script>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="direccion" class="label-floating">Dirección:</label>
                                <input type="text" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ()# ]{1,75}" class="form-control" name="direccion" id="direccion" maxlength="75" required>
                            </div>
                        </div>
                    </div>
                </div>
                </div></b>
                </fieldset>
            </div>
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
