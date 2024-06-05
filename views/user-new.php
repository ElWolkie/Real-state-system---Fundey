<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<b><div class="container-fluid">
	
	<form class="form-neon" autocomplete="off" id="registroUsuario" role="form" name="form" method="POST">
		<legend><i class="fas fa-user-lock"></i> &nbsp; Información de la cuenta</legend>
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="cedula" class="bmd-label-floating">Cédula:</label>
                            <input type="text" pattern="[0-9-]{1,20} /^[0-9]+$/" class="form-control" name="cedula" id="cedula" maxlength="8"
							oninput="return (event.target.value = event.target.value.replace(/[^0-9]/g, ''))">
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
			</div>
		</fieldset>
		<br>
		<fieldset>
			<legend><i class="fas fa-medal"></i> &nbsp; Nivel de privilegio</legend>
			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<p><span class="badge badge-info">Coordinador</span> Permisos para registrar, actualizar y eliminar</p>
						<p><span class="badge badge-success">Asistente</span> Permisos para registrar y actualizar</p>
						<div class="form-group">
							<select class="form-control" name="privilegio" id="privilegio">
								<option value="" selected="" disabled="">Seleccione una opción</option>
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
								<option value="Activo" selected>Activo</option>
							</select>
						</div>
					</div>
				</div>
			</div>
		</fieldset>
		<p class="text-center">
            <button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
            &nbsp; &nbsp;
            <input type="hidden" name="enviar" value="1">
            <button type="submit" class="btn btn-raised btn-info btn-sm" name="enviar" id="enviar"><i class="far fa-save"></i> &nbsp; ENVIAR</button>
        </p>
	</form>
</div></b>

<script>
	document.getElementById('registroUsuario').addEventListener('submit', function(event) {
    // Obtén los elementos de los campos de entrada
    var cedula = document.getElementById('cedula');
    var nombre = document.getElementById('username');
	var password = document.getElementById('password');
    var email = document.getElementById('correo');
    var privilegio = document.getElementById('privilegio');
    
    // Valida que los campos no estén vacíos
    
    if(cedula.value === '') {
        event.preventDefault(); // Evita que el formulario se envíe
        swal("Error al Enviar los datos", "Completa el campo ' Cédula ' por favor", "error").then(function() {
            cedula.focus(); // Enfoca el campo cedula después de que se cierre el alerta
        });

    } else if(nombre.value === '') {
        event.preventDefault(); // Evita que el formulario se envíe
        swal("Error al Enviar los datos", "Completa el campo ' Nombre ' por favor", "error").then(function() {
            nombre.focus(); // Enfoca el campo nombre después de que se cierre el alerta
        });

    } else if(email.value === '') {
        event.preventDefault(); // Evita que el formulario se envíe
        swal("Error al Enviar los datos", "Completa el campo ' Correo ' por favor", "error").then(function() {
            email.focus(); // Enfoca el campo apellido después de que se cierre el alerta
        });
    
    } else if(password.value === '') {
        event.preventDefault(); // Evita que el formulario se envíe
        swal("Error al Enviar los datos", "Completa el campo ' Contraseña ' por favor", "error").then(function() {
            password.focus(); // Enfoca el campo apellido después de que se cierre el alerta
        });

    } else if(privilegio.value === '') {
        event.preventDefault(); // Evita que el formulario se envíe
        swal("Error al Enviar los datos", "Completa el campo ' Privilegio ' por favor", "error").then(function() {
            privilegio.focus(); // Enfoca el campo telefono después de que se cierre el alerta
        });
        
    } 
    });
</script>