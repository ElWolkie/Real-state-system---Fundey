<div class="container-fluid">
                <div class="container-fluid form-neon">
                    <div class="container-fluid">
                        <p class="text-center roboto-medium">AGREGAR NUEVO PAGO A ESTE PRÉSTAMO</p>
                        <p class="text-center">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalPago"><i class="far fa-money-bill-alt"></i> &nbsp; Agregar pago</button>
                        </p>
                        <div>
                            <span class="roboto-medium">CLIENTE:</span> 
                            &nbsp; Carlos Alfaro
                        </div>
                        <div class="table-responsive">
                            <table class="table table-dark table-sm">
                                <thead>
                                    <tr class="text-center roboto-medium">
                                        <th>#</th>
                                        <th>FECHA</th>
                                        <th>CANTIDAD</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center" >
                                        <td>1</td>
                                        <td>11/10/2023</td>
                                        <td>$10 USD</td>
                                    </tr>
                                    <tr class="text-center" >
                                        <td>2</td>
                                        <td>17/10/2023</td>
                                        <td>$40 USD</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <fieldset>
                        <legend><i class="far fa-plus-square"></i> &nbsp; Información del prestamo</legend>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="prestamo_fecha_inicio">Fecha de reserva</label>
                                        <input type="date" class="form-control" readonly="" id="admin-dni">
                                    </div>
                                </div>
                                
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="prestamo_fecha_final">Fecha de entrega</label>
                                        <input type="date" class="form-control" readonly="" id="prestamo_fecha_final">
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="prestamo_estado" class="bmd-label-floating">Estado</label>
                                        <input type="text" pattern="[0-9.]{1,10}" class="form-control" readonly="" id="prestamo_estado" maxlength="10">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="prestamo_total" class="bmd-label-floating">Total a pagar</label>
                                        <input type="text" pattern="[0-9.]{1,10}" class="form-control" readonly="" id="prestamo_total" maxlength="10">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="prestamo_pagado" class="bmd-label-floating">Total depositado</label>
                                        <input type="text" pattern="[0-9.]{1,10}" class="form-control" readonly="" id="prestamo_pagado" maxlength="10">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="prestamo_observacion" class="bmd-label-floating">Observación</label>
                                        <input type="text" readonly=""  class="form-control" id="prestamo_observacion" maxlength="400">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>


            <!-- MODAL PAGOS -->
            <div class="modal fade" id="ModalPago" tabindex="-1" role="dialog" aria-labelledby="ModalPago" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <form class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalPago">Agregar pago</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="form-group">
                                    <label for="monto_pago" class="bmd-label-floating">Monto</label>
                                    <input type="text" pattern="[0-9.]{1,10}" class="form-control" name="monto_pago" id="monto_pago" maxlength="10">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-raised btn-info btn-sm" data-dismiss="modal">Agregar pago</button> &nbsp;&nbsp; 
                            <button type="button" class="btn btn-raised btn-danger btn-sm" data-dismiss="modal">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>