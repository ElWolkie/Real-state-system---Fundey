<b><div class="container-fluid" id="contenido">

    <form class="form-neon" autocomplete="off" role="form" name="form" method="POST">
        <fieldset>
            <legend><i class="fas fa-chalkboard-teacher"></i> &nbsp; ¿QUÉ REPORTE DESEA GENERAR?</legend><br><br>
            <b><div class="container-fluid">
                
                    <div class="row">
                        <div class="col-12 col-md-12" style="border: 1px solid #ddd; padding: 20px; display: flex; justify-content: space-between; align-items: center; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.15);">
                            <div style="display: flex; align-items: center;">
                                <img src="assets/avatar/person.png" alt="Icono" style="width: 100px; height: 100px; border-radius: 50%; border: 2px solid #ddd;">
                                <h4 style="margin-left: 15px; margin-top:10px; font-weight: 750; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">PERSONA</h4>
                            </div>
                            <a href="#" style="background-color: #007bff; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;">Generar Reporte</a>
                        </div>
                        <br><br><br>  
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
