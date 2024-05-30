<div class="container-fluid">
				<form action="" class="form-neon" autocomplete="off">
					<fieldset>
						<legend><i class="far fa-plus-square"></i> &nbsp; Información del material</legend>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="item_codigo" class="bmd-label-floating">Código</label>
										<input type="num" pattern="[a-zA-Z0-9-]{1,45}" class="form-control" name="recurso_codigo" id="recurso_codigo" maxlength="45" required>
									</div>
								</div>
								
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="item_nombre" class="bmd-label-floating">Nombre</label>
										<input type="text" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9 ]{1,140}" class="form-control" name="recurso_nombre" id="recurso_nombre" maxlength="140" required>
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="item_stock" class="bmd-label-floating">Color</label>
										<input type="text" pattern="[0-9]{1,9}" class="form-control" name="recurso_color" id="recurso_color" maxlength="15" required>
									</div>
								</div>
                                
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="item_nombre" class="bmd-label-floating">Marca</label>
										<input type="text" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9 ]{1,140}" class="form-control" name="recurso_marca" id="recurso_marca" maxlength="35" required>
									</div>
								</div>
                                
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="item_nombre" class="bmd-label-floating">Cantidad</label>
										<input type="number" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9 ]{1,140}" class="form-control" name="recurso_cantidad" id="recurso_cantidad" maxlength="20" required>
									</div>
                                    </div>
                                    <div class="col-12 col-md-4">
									<div class="form-group">
										<label for="recurso_color" class="bmd-label-floating">Unidad de medida</label>
										<select class="form-control" name="unidad_medida" id="unidad_medida" required>
											<option value="" selected="" disabled="">Seleccione una opción</option>
											<option selected="" value="Habilitado">Litros</option>
											<option value="Deshabilitado">Kilogramos</option>
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