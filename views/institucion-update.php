  <div class="container-fluid">
                <form action="" class="form-neon" autocomplete="off">
                    <fieldset>
                        <legend><i class="far fa-building"></i> &nbsp;Actualizar Información de la Institución</legend><br>
                        <div class="container-fluid">
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
                                        <label for="empresa_telefono" class="bmd-label-floating">Telefono</label>
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
                    </fieldset>
                    
                    <p class="text-center" style="margin-top: 40px;">
                        <button type="submit" class="btn btn-raised btn-success btn-sm"><i class="fas fa-sync-alt"></i> &nbsp; ACTUALIZAR</button>
                    </p>
                </form>
            </div>