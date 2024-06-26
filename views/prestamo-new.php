<div class="container-fluid">
            	<div class="container-fluid form-neon">
                    <div class="container-fluid">
                        <p class="text-center roboto-medium">AGREGAR PERSONA O BIEN</p>
                        <p class="text-center">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalCliente"><i class="fas fa-user-plus"></i> &nbsp; Agregar persona</button>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalItem"><i class="fas fa-box-open"></i> &nbsp; Agregar bien</button>
                        </p>
                        <div>
                          
                        </div>
                        <div class="table-responsive">
                            <table class="table table-dark table-sm">
                                <thead>
                                    <tr class="text-center roboto-medium">
                                        <th>RESPONSABLE</th>
                                        <th>RECURSO</th>
										<th>CANTIDAD</th>
										<th>UBICACIÓN</th>
										<th>FECHA DE RESERVA</th>
										<th>FECHA DE ENTREGA</th>
										<th>ESTADO</th>
                                        <th>ELIMINAR</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center" >
                                        <td>FERNANDO LOPEZ</td>
                                        <td>balones</td>
										<td>9</td>
										<td>concha acustica av ravell</td>
										<td>12/6/2024</td>
										<td>13/6/2024</td>
										<td>pendiente</td>
									
                                        <td>
                                            <form action="">
                                                <button type="button" class="btn btn-danger">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                 
                                </tbody>
                            </table>
                        </div>
                    </div>
					<form action="" autocomplete="off">
						<fieldset>
							<legend><i class="far fa-plus-square"></i> &nbsp; Información del préstamo</legend>
							<div class="container-fluid">
								<div class="row">
									<div class="col-12 col-md-4">
										<div class="form-group">
											<label for="prestamo_fecha_inicio">Fecha de reserva</label>
											<input type="date" class="form-control" name="prestamo_fecha_inicio" id="admin-dni">
										</div>
									</div>
									
									<div class="col-12 col-md-4">
										<div class="form-group">
											<label for="prestamo_fecha_final">Fecha de entrega</label>
											<input type="date" class="form-control" name="prestamo_fecha_final" id="prestamo_fecha_final">
										</div>
									</div>
									<div class="col-12 col-md-4">
	                                    <div class="form-group">
	                                        <label for="prestamo_estado" class="bmd-label-floating">Estado</label>
	                                        <select class="form-control" name="item_estado" id="item_estado">
	                                            <option value="" selected="" disabled="">Seleccione una opción</option>
	                                            <option value="Prestamo">Préstamo</option>
	                                            <option value="Reservacion">Reservación</option>
	                                            <option value="Finalizado">Finalizado</option>
	                                        </select>
	                                    </div>
	                                </div>
									<div class="col-12 col-md-6">
										<div class="form-group">
											<label for="prestamo_total" class="bmd-label-floating">Total a pagar</label>
											<input type="text" pattern="[0-9.]{1,10}" class="form-control" name="prestamo_total" id="prestamo_total" maxlength="10">
										</div>
									</div>
	                                <div class="col-12 col-md-6">
	                                    <div class="form-group">
	                                        <label for="prestamo_pagado" class="bmd-label-floating">Total depositado</label>
	                                        <input type="text" pattern="[0-9.]{1,10}" class="form-control" name="prestamo_pagado" id="prestamo_pagado" maxlength="10">
	                                    </div>
	                                </div>
	                                <div class="col-12">
	                                    <div class="form-group">
	                                        <label for="prestamo_observacion" class="bmd-label-floating">Observación</label>
	                                        <input type="text" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ#() ]{1,400}" class="form-control" name="prestamo_observacion" id="prestamo_observacion" maxlength="400">
	                                    </div>
	                                </div>
								</div>
							</div>
						</fieldset>
						<br><br>
						<p class="text-center" style="margin-top: 40px;">
							<button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
							&nbsp; &nbsp;
							<button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
						</p>
					</form>
            	</div>
			</div>


            <!-- MODAL CLIENTE -->
            <div class="modal fade" id="ModalCliente" tabindex="-1" role="dialog" aria-labelledby="ModalCliente" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalCliente">Agregar Persona</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="form-group">
                                    <label for="agregar_cliente" class="bmd-label-floating">DNI, Nombre, Apellido, Telefono</label>
                                    <input type="text" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ#() ]{1,30}" class="form-control" name="agregar_cliente" id="agregar_cliente" maxlength="30">
                                </div>
                            </div>
                            <br>
                            <div class="container-fluid">
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered table-sm">
                                        <tbody>
                                            <tr class="text-center">
                                                <td>29684659 - Angel</td>
                                                <td>
                                                    <form action="">
                                                        <button type="button" class="btn btn-primary"><i class="fas fa-user-plus"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>29864826 - Jesús</td>
                                                <td>
                                                    <form action="">
                                                        <button type="button" class="btn btn-primary"><i class="fas fa-user-plus"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>31958452 - Anthony</td>
                                                <td>
                                                    <form action="">
                                                        <button type="button" class="btn btn-primary"><i class="fas fa-user-plus"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>30451237 - Luis</td>
                                                <td>
                                                    <form action="">
                                                        <button type="button" class="btn btn-primary"><i class="fas fa-user-plus"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- MODAL CLIENTE -->
            <div class="modal fade" id="ModalItem" tabindex="-1" role="dialog" aria-labelledby="ModalItem" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalItem">Agregar item</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="form-group">
                                    <label for="agregar_item" class="bmd-label-floating">Código, Nombre</label>
                                    <input type="text" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ#() ]{1,30}" class="form-control" name="agregar_item" id="agregar_item" maxlength="30">
                                </div>
                            </div>
                            <br>
                            <div class="container-fluid">
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered table-sm">
                                        <tbody>
                                            <tr class="text-center">
                                                <td>15 - Bicicletas</td>
                                                <td>
                                                    <form action="">
                                                        <button type="button" class="btn btn-primary"><i class="fas fa-box-open"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>8 - Escritorios</td>
                                                <td>
                                                    <form action="">
                                                        <button type="button" class="btn btn-primary"><i class="fas fa-box-open"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>3 - Video Beam</td>
                                                <td>
                                                    <form action="">
                                                        <button type="button" class="btn btn-primary"><i class="fas fa-box-open"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>45 - Sillas</td>
                                                <td>
                                                    <form action="">
                                                        <button type="button" class="btn btn-primary"><i class="fas fa-box-open"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>