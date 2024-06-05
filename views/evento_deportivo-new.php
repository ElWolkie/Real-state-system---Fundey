<b><div class="container-fluid" id="contenido">

    <form class="form-neon" autocomplete="off" role="form" name="form" method="POST">
        <fieldset>
            <legend><i class="far fa-plus-square"></i> &nbsp; Información del Evento</legend>
            <b><div class="container-fluid">
                    <!-- IMAGEN DEL EVENTO -->
                    <p class="text-center" style="margin-top: 40px;">
                    <b><label for="image" class="label-floating">Ingrese una Imagen del Bien Inmuble:</label><br></b>
                    <input type="file" name="image" id="image">

                    <div class="row">
                            <div class="col-12 col-md-6" style="margin: 10px 0px 10px 0px;">
                                <div class="form-group">
                                <label for="name_evento" class="label-floating">Nombre del Evento Deportivo:</label>
                                <input type="text" pattern="[a-zA-z0-99áéíóúÁÉÍÓÚñÑ ]" class="form-control" name="name_evento" id="name_evento" maxlength="40">
                                </div>
                            </div>
                                
                            <div class="col-12 col-md-6" style="margin: 10px 0px 10px 0px;">
                                <div class="form-group">
                                    <label for="fecha" class="label-floating">Fecha del Evento</label>
                                    <input type="date" class="form-control"  maxlength="8" name="fecha" id="fecha">
                                </div>
                            </div>

                            <div class="col-12 col-md-6" style="margin: 10px 0px 10px 0px;">
                                <div class="form-group">
                                    <label for="telefono" class="label-floating">Hora del Evento:</label>
                                    <input type="text" pattern="[0-9()+]{1,20}" class="form-control" name="telefono" id="telefono" maxlength="5" 
                                    oninput="formatEvento(this)">
                                </div>
                            </div>
                            
                            <script>
                                //Funcion de la hora del evento
                                    function formatEvento(input) {
                                    var num = input.value.replace(/\D/g,'');
                                    if(num.length > 2) {
                                        input.value = num.substring(0,2) + '-' + num.substring(2);
                                    } else {
                                        input.value = num;
                                    }
                                }
                            </script>

                            <div class="col-12 col-md-6" style="margin: 10px 0px 10px 0px;">
                                <div class="form-group">
                                    <label for="direccion" class="label-floating">Dirección:</label>
                                    <input type="text" pattern="[a-zA-Z0-99áéíóúÁÉÍÓÚñÑ()# ]{1,190}" class="form-control" name="direccion" id="direccion" maxlength="50">
                                </div>
                            </div>

                            <div class="col-12 col-md-6" style="margin: 10px 0px 10px 0px;">                          
                                <div class="form-group">
                                    <label for="duracion" class="label-floating">Duración del Evento</label>
                                    <input type="text" pattern="[a-zA-z0-99áéíóúÁÉÍÓÚñÑ ]" class="form-control" name="duracion" id="duracion" >
                                </div>
                            </div>

                            <div class="col-12 col-md-6" style="margin: 10px 0px 10px 0px;">
                                <div class="form-group">
                                    <label for="nombre_apellido" class="label-floating">Nombre y Apellido del Responsable</label>
                                    <input type="text" pattern="[a-zA-z0-99áéíóúÁÉÍÓÚñÑ ]" class="form-control" name="nombre_apellido" id="nombre_apellido" maxlength="50">
                                </div>
                            </div>
                         
                            <div class="col-12 col-md-6" style="margin: 10px 0px 10px 0px;">
                                <div class="form-group">
                                    <label for="requerimientos" class="label-floating">Requerimientos del Evento</label>
                                    <input type="text" pattern="[a-zA-z0-99áéíóúÁÉÍÓÚñÑ ]" class="form-control" name="requerimientos" id="requerimientos">
                                </div>
                            </div>
                                                       
                            <div class="col-12 col-md-6" style="margin: 10px 0px 10px 0px;">
                                <div class="form-group">
                                    <label for="number" class="label-floating">Cantidad</label>
                                    <input type="number" pattern="[a-zA-z0-99áéíóúÁÉÍÓÚñÑ ]" class="form-control" name="cantidad" id="cantidad" maxlength="3">
                                </div>
                            </div>
                        </div>
                </div>
                    </b>
                </fieldset>
                <br>
                <p class="text-center" style="margin-top: 40px;">
                    <button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
                    &nbsp; &nbsp;
                    <button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
                </p>
    </form>
</div></b>
