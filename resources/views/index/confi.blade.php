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

            $("#form-registro").submit(function() {
                    event.preventDefault();
                        $("#password_invalida_caracteres").hide();
                        $("#password_invalida_numeros").hide();
                        $("#password_invalida_letras").hide();

                        var password = $('#password').val();
                        var password_confirmation = $('#password_confirmation').val();

                    if (password.length < 8){
                    $("#password_invalida_caracteres").show();
                    } else if(!/\d/.test(password)){
                    $("#password_invalida_numeros").show();
                     } else if(!/[a-zA-Z]/.test(password)){
                    $("#password_invalida_letras").show();
                    } else if (password != password_confirmation) {
                    alert("las contraseñas deben ser iguales")
                    } else {

                    $.post("http://pokenacho.test/api/register",
                        $("#form-registro").serialize())
                        .done(function(data) {
                        alert("Se ha guardado correctamente");
                    });
                    }
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
        <form id="form-registro">

        <div class="form-group">
            <label for="password">Nueva Foto </label>
            <input type="password" class="form-control" id="password" name="foto" placeholder="Ingrese su foto">
          </div>

          <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese su nombre">
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
            <label for="password">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese su contraseña">
          </div>

          <div class="form-group">
            <label for="password"> Nueva Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese su  nueva contraseña">
          </div>

          <div class="form-group">
            <label for="password"> Nueva Descripcion</label>
            <input type="password" class="form-control" id="password" name="descr" placeholder="Ingrese su nueva descripcion">
          </div>

          <button type="submit" id="bt-guardar" class="btn btn-success btn-block my-2">Guardar</button>
        </form>
      </div>
    </div>
@endsection