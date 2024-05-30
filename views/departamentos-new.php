<div class="container-fluid">
				<form action="" class="form-neon" autocomplete="off">
					<fieldset>
						<legend><i class="far fa-plus-square"></i> &nbsp; Información del Departamento</legend>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="item_codigo" class="bmd-label-floating">Código</label>
										<input type="num" pattern="[a-zA-Z0-9-]{1,45}" class="form-control" name="item_codigo" id="item_codigo" maxlength="45" required>
									</div>
								</div>
								
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="item_nombre" class="bmd-label-floating">Nombre</label>
										<input type="text" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9 ]{1,140}" class="form-control" name="item_nombre" id="item_nombre" maxlength="40" required>
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="item_stock" class="bmd-label-floating">Ubicación</label>
										<input type="text" pattern="[0-9]{1,9}" class="form-control" name="item_stock" id="item_stock" maxlength="15" required>
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="item_estado" class="bmd-label-floating">Bienes asignados</label>
										<select class="form-control" name="item_estado" id="item_estado" required>
											<option value="" selected="" disabled="">Seleccione una opción</option>
											<option selected="Mesa" value="Mesa">Mesa</option>
											<option value="Silla">Silla</option>
										</select>
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