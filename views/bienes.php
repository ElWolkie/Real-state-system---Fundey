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

    <title>Bienes</title>

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
                    <i class="fas fa-pallet fa-fw"></i> &nbsp;<span style="font-size: 25px; font-family: Verdana, Geneva, Tahoma, sans-serif;">BIENES</span>
                </h3>
            </div>
            <div class="container-fluid">
                <ul class="full-box list-unstyled page-nav-tabs">
                    <li>
                        <a href="item-new.php" style="font-size: 18px; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-weight:bold"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR BIEN</a>
                    </li>
                    <li>
                        <a href="item-list.php" style="font-size: 18px; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-weight:bold"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE BIENES</a>
                    </li>
                    <li>
                        <a href="item-search.php" style="font-size: 18px; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-weight:bold"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR BIEN</a>
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
    
    	
	<!--=============================================
	=            Include JavaScript files           =
	==============================================-->
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

	<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="modalLabel" style="font-weight: bold;">Actualizar Bien</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"></span>
        </button>
      </div>
    <div class="modal-body">
	<div class="container-fluid">
        <form action="" class="form-neon" autocomplete="off">
            <fieldset>
            <b><legend><i class="fas fa-pallet fa-fw"></i> &nbsp; Información del Bien</legend></b>
            <b><div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="item_codigo" class="bmd-label-floating">Código</label>
                                <input type="text" pattern="[a-zA-Z0-9-]{1,45}" class="form-control" name="item_codigo" id="item_codigo" maxlength="45" required>
                            </div>
                        </div>
                        
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="item_nombre" class="bmd-label-floating">Nombre</label>
                                <input type="text" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9 ]{1,140}" class="form-control" name="item_nombre" id="item_nombre" maxlength="40" required>
                            </div>
                        </div><br>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="item_stock" class="bmd-label-floating">Cantidad</label>
                                <input type="num" pattern="[0-9]{1,9}" class="form-control" name="item_stock" id="item_stock" maxlength="9" required>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="item_estado" class="label-floating">Estado:</label>
                                <select class="form-control" name="item_estado" id="item_estado" required>
                                    <option value="" selected="" disabled="">Seleccione una opción</option>
                                    <option selected="" value="Habilitado">Habilitado</option>
                                    <option value="Deshabilitado">Deshabilitado</option>
                                </select>
                            </div>
                        </div>
                </div>
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