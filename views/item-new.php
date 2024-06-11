<b><div class="container-fluid">
	<form action="" class="form-neon" autocomplete="off">
		<fieldset>
			<legend><i class="far fa-plus-square"></i> &nbsp; Bien Mueble</legend>
			<div class="container-fluid">
				<div class="row">

					<div class="col-12 col-md-6">
						<div class="form-group">
							<label for="cantidad" class="label-floating">Cantidad:</label>
							<input type="text" pattern="[0-9]{1,9}" class="form-control" name="cantidad" id="cantidad" maxlength="2" oninput="return (event.target.value = event.target.value.replace(/[^0-9]/g, ''))">
						</div>
					</div>

					<div class="col-12 col-md-6">
						<div class="form-group">
							<label for="codigo" class="label-floating">Código Actual:</label>
							<input type="text" pattern="[0-9]{1,9}" class="form-control" name="codigo" maxlength="6" oninput="return (event.target.value = event.target.value.replace(/[^0-9]/g, ''))"
							value="<?php /* $caracteres = '123456789ABC';
							$aleatoria = substr(str_shuffle($caracteres), 0, 4);
							echo $aleatoria . "\n"; */ ?>">
						</div>
					</div>
					
					<div class="col-12 col-md-6">
						<div class="form-group">
							<label for="descripcion" class="label-floating">Descripción del Bien:</label>
							<input type="text" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9 ]{1,140}" class="form-control" name="descripcion" id="descripcion" maxlength="60">
						</div>
					</div>
					
					<div class="col-12 col-md-6">
						<div class="form-group">
							<label for="estado" class="label-floating">Estado:</label>
							<select class="form-control" name="estado" id="estado">
								<option value="" selected="" disabled="">Seleccione una opción</option>
								<option value="Bueno">Bueno</option>
								<option value="Regular">Regular</option>
								<option value="Malo">Malo</option>
							</select>
						</div>
					</div>

					<div class="col-12 col-md-6">
							<div class="form-group">
								<label for="ubicacion" class="label-floating">Ubicación:</label>
								<input type="text" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9 ]{1,140}" class="form-control" name="ubicacion" id="ubicacion" maxlength="30">
							</div>
					</div>

					<div class="col-12 col-md-6">
						<div class="form-group">
							<label for="observacion" class="label-floating">Observacion:</label>
							<input type="text" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9()- ]{1,190}" class="form-control" name="observacion" id="observacion" maxlength="50">
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
</div></b>

<div class="container-fluid">
	<form action="" class="form-neon" autocomplete="off">
		<fieldset>
			<legend><i class="far fa-plus-square"></i> &nbsp; Bien Deportivo</legend>
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
