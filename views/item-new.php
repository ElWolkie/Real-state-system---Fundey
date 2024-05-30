<div class="container-fluid">
	<form action="" class="form-neon" autocomplete="off">
		<fieldset>
			<legend><i class="far fa-plus-square"></i> &nbsp; Bien Mueble</legend>
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="codigo" class="label-floating">Código:</label>
							<input type="text" pattern="[a-zA-Z0-9-]{1,45}" class="form-control" name="codigo" readonly value="<?php $caracteres = '123456789ABC';
							$aleatoria = substr(str_shuffle($caracteres), 0, 4);
							echo $aleatoria . "\n"; ?>">
						</div>
					</div>
					
					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="item_nombre" class="label-floating">Nombre:</label>
							<input type="text" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9 ]{1,140}" class="form-control" name="item_nombre" id="item_nombre" maxlength="40" required>
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="item_stock" class="label-floating">Cantidad:</label>
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
					<div class="col-12 col-md-6">
						<div class="form-group">
							<label for="item_detalle" class="label-floating" required>Detalle:</label>
							<input type="text" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9()- ]{1,190}" class="form-control" name="item_detalle" id="item_detalle" maxlength="150" required>
						</div>
					</div>
				</div>
			</div>
		</fieldset>
		<br><br><br>
		<p class="text-center" style="margin-top: 40px;">
			<button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
			&nbsp; &nbsp;
			<button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
		</p>
	</form>
</div>

<div class="container-fluid">
	<form action="" class="form-neon" autocomplete="off">
		<fieldset>
			<legend><i class="far fa-plus-square"></i> &nbsp; Bien Inmueble</legend>
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="codigo" class="label-floating">Código:</label>
							<input type="text" pattern="[a-zA-Z0-9-]{1,45}" class="form-control" name="codigo" readonly value="<?php $caracteres = '123456789ABC';
							$aleatoria = substr(str_shuffle($caracteres), 0, 4);
							echo $aleatoria . "\n"; ?>">
						</div>
					</div>
					
					<div class="col-12 col-md-8">
						<div class="form-group">
							<label for="item_nombre" class="label-floating">Nombre:</label>
							<input type="text" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9 ]{1,140}" class="form-control" name="item_nombre" id="item_nombre" maxlength="40" required>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="form-group">
							<label for="item_stock" class="label-floating">Ubicacion:</label>
							<input type="num" pattern="[0-9]{1,9}" class="form-control" name="item_stock" id="item_stock" maxlength="9" required>
						</div>
					</div>
	
					<div class="col-12 col-md-6">
						<div class="form-group">
							<label for="item_detalle" class="label-floating" required>Detalle:</label>
							<input type="text" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9()- ]{1,190}" class="form-control" name="item_detalle" id="item_detalle" maxlength="150" required>
						</div>
					</div>
				</div>
			</div>
		</fieldset>
		<br><br><br>
		<p class="text-center" style="margin-top: 40px;">
			<button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
			&nbsp; &nbsp;
			<button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
		</p>
	</form>
</div>
