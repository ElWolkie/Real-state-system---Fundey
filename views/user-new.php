<div class="container-fluid">
		<form action="" class="form-neon" autocomplete="off">
	<legend><i class="fas fa-user-lock"></i> &nbsp; Información de la cuenta</legend>
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="usuario_dni" class="bmd-label-floating">Cédula:</label>
                            <input type="text" pattern="[0-9-]{1,20} /^[0-9]+$/" class="form-control" name="usuario_dni" id="usuario_dni" maxlength="8" required>
                        </div>
                    </div>
					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="usuario_usuario" class="bmd-label-floating">Nombre de usuario</label>
							<input type="text" pattern="[a-zA-Z0-9]{1,35}" class="form-control" name="usuario_usuario" id="usuario_usuario" maxlength="20" required>
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="usuario_email" class="bmd-label-floating">Email</label>
							<input type="email" class="form-control" name="usuario_email" id="usuario_email" maxlength="30" required>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="form-group">
							<label for="usuario_clave_1" class="bmd-label-floating">Contraseña</label>
							<input type="password" class="form-control" name="usuario_clave_1" id="usuario_clave_1" maxlength="20" required> 
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="form-group">
							<label for="usuario_clave_2" class="bmd-label-floating">Repetir contraseña</label>
							<input type="password" class="form-control" name="usuario_clave_2" id="usuario_clave_2" maxlength="20" required>
						</div>
					</div>
				</div>
			</div>
		</fieldset>
		<br><br>
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
		<br><br>
		<fieldset>
			<legend><i class="fas fa-user-check"></i> &nbsp; Estatus</legend>
			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<div class="form-group">
							<select class="form-control" name="usuario_privilegio" required disabled style="background-color: #f8f8f8; border-radius:5px; padding:5px;">
								<option value="" disabled="">Seleccione una opción</option>
								<option value="Activo" selected="">Activo</option>
								<option value="Inactivo">Inactivo</option>
							</select>
						</div>
					</div>
				</div>
			</div>
		</fieldset>
			<p class="text-center" style="margin-top: 40px;">
				<button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
				&nbsp; &nbsp;
				<button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
			</p>
		</form>
	</div>