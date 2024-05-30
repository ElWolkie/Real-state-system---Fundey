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
      
    <title>Institución</title>

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
    <script src="./js/sweetalert2.min.js"></script>

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
                    <i class="fas fa-building fa-fw"></i> &nbsp;<span style="font-size: 25px; font-family: Verdana, Geneva, Tahoma, sans-serif;">INSTITUCIÓN</span>
                </h3>
            </div>

            <div class="container-fluid">
				<ul class="full-box list-unstyled page-nav-tabs">
					<li>
						<a href="institucion-update.php" style="font-size: 18px; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-weight:bold"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; ACTUALIZAR INSTITUCIÓN</a>
					</li>
                    <li id="volver" style="display: none;">
                        <a href="institucion-register.php" style="font-size: 18px; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-weight:bold"><i class="fas fa-arrow-alt-circle-left"></i> &nbsp; VOLVER</a>
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

                        // Si el enlace es "Actualizar Institución", muestra el enlace "Volver"
                        if (url === 'institucion-update.php') {
                        $('#volver').fadeIn('slow');
                    } else {
                        $('#volver').fadeOut('slow');
                    }
                    });
                });
            </script>	

            <!--CONTENT-->
            <b><div class="container-fluid" id="contenido">
                <form action="" class="form-neon" autocomplete="off">
                    <fieldset>
                        <b><legend><i class="far fa-building"></i> &nbsp; Información de la Institución</legend></b>
                        <b><div class="container-fluid">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="empresa_nombre" class="bmd-label-floating">Nombre de la Institución</label>
                                        <input type="text" pattern="[a-zA-z0-99áéíóúÁÉÍÓÚñÑ ]{1,70}" class="form-control" name="empresa_nombre" id="empresa_nombre" maxlength="70" required>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="empresa_email" class="bmd-label-floating">Correo</label>
                                        <input type="email" class="form-control" name="empresa_email" id="empresa_email" maxlength="70" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="empresa_telefono" class="bmd-label-floating">Teléfono</label>
                                        <input type="text" pattern="[0-9()+]{1,20}" class="form-control" name="empresa_telefono" id="empresa_telefono" maxlength="20" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="empresa_direccion" class="bmd-label-floating">Dirección</label>
                                        <input type="text" pattern="[a-zA-z0-99áéíóúÁÉÍÓÚñÑ ]{1,190}" class="form-control" name="empresa_direccion" id="empresa_direccion" maxlength="190" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="empresa_rif" class="bmd-label-floating">RIF</label>
                                        <input type="text" pattern="[a-zA-z0-99áéíóúÁÉÍÓÚñÑ ]{1,190}" class="form-control" name="empresa_rif" id="empresa_rif" maxlength="30" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="empresa_encargado" class="bmd-label-floating">Encargado</label>
                                        <input type="text" pattern="[a-zA-z0-99áéíóúÁÉÍÓÚñÑ ]{1,190}" class="form-control" name="empresa_encargado" id="empresa_encargado" maxlength="20" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </b>
                    </fieldset>
                    <br>
                    <p class="text-center" style="margin-top: 40px;">
                        <button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
                        &nbsp; &nbsp;
                        <button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
                    </p>
                </form>
            </div></b>
        </section>
    </main>


    <!--=============================================
	=            Include JavaScript files           =
	==============================================-->
    <!-- jQuery V3.4.1 -->
    <script src="./js/jquery-3.4.1.min.js"></script>

    <!-- popper -->
    <script src="./js/popper.min.js"></script>

    <!-- Bootstrap V4.3 -->
    <script src="./js/bootstrap.min.js"></script>

    <!-- jQuery Custom Content Scroller V3.1.5 -->
    <script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- Bootstrap Material Design V4.0 -->
    <script src="./js/bootstrap-material-design.min.js"></script>
    <script>
        $(document).ready(function() {
            $('body').bootstrapMaterialDesign();
        });
    </script>

    <script src="./js/main.js"></script>
</body></html>