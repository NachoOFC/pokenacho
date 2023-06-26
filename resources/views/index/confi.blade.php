@extends('Layouts.app')

@section('scripts')
<script>
    $(document).ready(function() {

        $("#email").blur(function(){
            var email = $('#email').val();

            if (validarEmail(email) == false) {
                $("#correo_invalido_user_help_block").show();
                // correo_user.focus();
            } else {
                $("#correo_invalido_user_help_block").hide();
            }

            if(email === ""){
                $("#correo_invalido_user_help_block").hide();
            }

            $.ajax({
                url: "http://pokenacho.test/api/verificar-email",
                type: 'POST',
                data: { email: email },
                dataType: 'json',
                success: function(response) {
                    if (response.exists) {
                        $("#correo_existente_user_help_block").show();
                    } else {
                        $("#correo_existente_user_help_block").hide();
                    }
                }
            });

        });

        $("#form-configuracion").submit(function() {
            event.preventDefault();
            // Resto del código para procesar la actualización de contraseña y descripción
        });

    });

    function validarEmail(valor) {
        if (/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(valor)) {
            return true;
        } else {
            return false;
        }
    }
</script>
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-6 my-4">
        <h1>Configuracion De Usuario :D</h1>
        <form id="form-configuracion" action="{{ route('configuracion.cambiar-contrasena') }}" method="POST">
            @csrf
            <!-- Campos para cambio de contraseña -->
            <div class="form-group">
                <label for="password_actual">Contraseña actual</label>
                <input type="password" class="form-control" id="password_actual" name="password_actual" placeholder="Ingrese su contraseña actual">
            </div>
            <div class="form-group">
                <label for="password_nueva">Nueva contraseña</label>
                <input type="password" class="form-control" id="password_nueva" name="password_nueva" placeholder="Ingrese su nueva contraseña">
            </div>
            <div class="form-group">
                <label for="password_nueva_confirmation">Confirmar nueva contraseña</label>
                <input type="password" class="form-control" id="password_nueva_confirmation" name="password_nueva_confirmation" placeholder="Confirme su nueva contraseña">
            </div>

            <!-- Campos para cambio de foto -->
            <div class="form-group">
                <label for="foto">Nueva Foto</label>
                <input type="file" class="form-control-file" id="foto" name="foto">
            </div>

            <!-- Campos para cambio de descripción -->
            <div class="form-group">
                <label for="descr">Nueva Descripcion</label>
                <textarea class="form-control" id="descr" name="descr" rows="3" placeholder="Ingrese su nueva descripción"></textarea>
            </div>

            <button type="submit" id="bt-guardar" class="btn btn-success btn-block my-2">Guardar</button>
        </form>
    </div>
</div>
@endsection