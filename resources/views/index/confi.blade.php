@extends('Layouts.app')

@section('scripts')
<script>
    $(document).ready(function() {

        $("#email").blur(function(){
            var email = $('#email').val();

            if (validarEmail(email) == false) {
                $("#correo_invalido_user_help_block").show();
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
            // Resto del código para procesar la actualización de datos del usuario
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
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre">
            </div>
            <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su email">
            <div id="correo_invalido_user_help_block" class="form-text" style="display: none;">
                <span class="badge text-bg-danger">El correo ingresado no es válido.</span>
            </div>
            <div id="correo_existente_user_help_block" class="form-text" style="display: none;">
                <span class="badge text-bg-danger">El correo ingresado ya se encuentra en uso.</span>
            </div>
          </div>
            <div class="form-group">
                <label for="password_actual">Contraseña actual</label>
                <input type="password" class="form-control" id="password_actual" name="password_actual" placeholder="Ingrese su contraseña actual">
            </div>
            <button type="submit" id="bt-borrar" class="btn btn-success btn-block my-2">Borrar Cuenta</button>
            <div class="form-group">
                <label for="password_nueva">Nueva contraseña</label>
                <input type="password" class="form-control" id="password_nueva" name="password_nueva" placeholder="Ingrese su nueva contraseña">
            </div>
            <div class="form-group">
                <label for="password_nueva_confirmation">Confirmar nueva contraseña</label>
                <input type="password" class="form-control" id="password_nueva_confirmation" name="password_nueva_confirmation" placeholder="Confirme su nueva contraseña">
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