<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<b><div class="container-fluid">

    <form class="form-neon" autocomplete="off" id="registroPersona" role="form" name="form" method="POST">
        <fieldset>
            <legend><i class="far fa-address-card"></i> &nbsp; Información personal</legend>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="cedula" class="label-floating">Cédula:</label>
                            <input type="text" pattern="[0-9-]{1,20} /^[0-9]+$/" class="form-control" name="cedula" id="cedula" maxlength="8" 
                            oninput="return (event.target.value = event.target.value.replace(/[^0-9]/g, ''))">
                        </div>
                    </div>
                    
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="nombre" class="label-floating">Nombre:</label>
                            <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}" class="form-control" name="nombre" id="nombre" maxlength="25">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="apellido" class="label-floating">Apellido:</label>
                            <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}" class="form-control" name="apellido" id="apellido" maxlength="25">
                        </div>
                    </div>
			
					<div class="col-12 col-md-4">
						<div class="form-group">
                        <label for="sexo" class="label-floating">Sexo:</label>
							<select class="form-control" name="sexo" id="sexo">
								<option value="" selected disabled="">Seleccione una opción</option>
								<option value="Masculino">Masculino</option>
								<option value="Femenino">Femenino</option>
							</select>
						</div>
					</div>

                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="telefono" class="label-floating">Teléfono:</label>
                            <input type="text" pattern="[0-9()+]{1,20}" class="form-control" name="telefono" id="telefono" maxlength="12" 
                            oninput="formatTelefono(this)">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="direccion" class="label-floating">Dirección:</label>
                            <input type="text" pattern="[a-zA-Z0-99áéíóúÁÉÍÓÚñÑ()# ]{1,190}" class="form-control" name="direccion" id="direccion" maxlength="50">
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
        <br>
        <br><br>
        <p class="text-center">
            <button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
            &nbsp; &nbsp;
            <input type="hidden" name="enviar" value="1">
            <button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp;Enviar</button>
        </p>
    </form>
</div>
</b>

<script>
    //Funcion de 4 digitos Telefono
    function formatTelefono(input) {
    var num = input.value.replace(/\D/g,'');
    if(num.length > 4) {
        input.value = num.substring(0,4) + '-' + num.substring(4);
    } else {
        input.value = num;
    }
}

	document.getElementById('registroPersona').addEventListener('submit', function(event) {
    // Obtén los elementos de los campos de entrada
    var cedula = document.getElementById('cedula');
    var nombre = document.getElementById('nombre');
    var apellido = document.getElementById('apellido');
    var sexo = document.getElementById('sexo');
    var telefono = document.getElementById('telefono');
    var direccion = document.getElementById('direccion');

    // Valida que los campos no estén vacíos
    
    if(cedula.value === '') {
        event.preventDefault(); // Evita que el formulario se envíe
        swal("Error al Enviar los datos", "Completa el campo ' Cédula ' por favor", "error").then(function() {
            cedula.focus(); // Enfoca el campo cedula después de que se cierre el alerta
        });

    } else if(nombre.value === '') {
        event.preventDefault(); // Evita que el formulario se envíe
        swal("Error al Enviar los datos", "Completa el campo ' Nombre ' por favor", "error").then(function() {
            nombre.focus(); // Enfoca el campo nombre después de que se cierre el alerta
        });

    } else if(apellido.value === '') {
        event.preventDefault(); // Evita que el formulario se envíe
        swal("Error al Enviar los datos", "Completa el campo ' Apellido ' por favor", "error").then(function() {
            apellido.focus(); // Enfoca el campo apellido después de que se cierre el alerta
        });
    
    } else if(sexo.value === '') {
        event.preventDefault(); // Evita que el formulario se envíe
        swal("Error al Enviar los datos", "Completa el campo ' Sexo ' por favor", "error").then(function() {
            sexo.focus(); // Enfoca el campo apellido después de que se cierre el alerta
        });

    } else if(telefono.value === '') {
        event.preventDefault(); // Evita que el formulario se envíe
        swal("Error al Enviar los datos", "Completa el campo ' Teléfono ' por favor", "error").then(function() {
            telefono.focus(); // Enfoca el campo telefono después de que se cierre el alerta
        });
        
    } else if(direccion.value === '') {
        event.preventDefault(); // Evita que el formulario se envíe
        swal("Error al Enviar los datos", "Completa el campo ' Dirección ' por favor", "error").then(function() {
            direccion.focus(); // Enfoca el campo direccion después de que se cierre el alerta
        });
    }
});
</script>
