<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon Generations</title>
    <link rel="stylesheet" href="/Login_resources/Login.CSS">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    <script src="/Login_resources/Login.JS"></script>
    <audio id="Musica" src="/Login_resources/Pokemon_music2.mp3" autoplay loop muted></audio>
    <div id="fondo"></div>
    <div id="container_base" class="container-fluid">
        <div class="row" >
            <div id="lado_izquierdo" class="col-md-7 d-flex overflow-auto d-none d-sm-none d-md-block vh-100">
                <div class="row" >
                    <div class="container">
                        <div class="row vh-100" style="height: 50%;">
                            <div class="col-md-2"></div>     
                            <div class="col-md-8 align-self-center">
                                <div id="carrusel" class="carousel-slide" data-bd-ride="carousel">
                                    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                                        <div class="carousel-inner">
                                          <div id="carouselanimation" class="carousel-item active">
                                            <video id="video_gb" src="/Login_resources/Gameplay_GB.mp4" class="d-block w-60 fixed-size-image mx-auto rounded img-thumbnail" autoplay="true" muted></video>
                                          </div>
                                          <div class="carousel-item">
                                            <video id="gba" src="/Login_resources/Gameplay_GBA.mp4" class="d-block w-100 rounded img-thumbnail" autoplay="true" muted></video>
                                          </div>
                                          <div class="carousel-item">
                                            <video id="video_ds" src="/Login_resources/Gameplay_DS.mp4" class="d-block w-100 rounded img-thumbnail" autoplay="true" muted></video>
                                          </div>
                                          <div class="carousel-item">
                                            <video id="video_ds" src="/Login_resources/Gameplay_SW.mp4" class="d-block w-100 rounded img-thumbnail" autoplay="true" muted></video>
                                          </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                                          <span class="" aria-hidden="true"></span>
                                          <span class="sr-only"></span>
                                        </a>
                                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                                          <span class="" aria-hidden="true"></span>
                                          <span class="sr-only"></span>
                                        </a>
                                      </div>
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                      </div>
                </div>
            </div>

<!-- ZONA DE VIDEO E IMAGENES DE POKEMON GENERATIONS -->
           
<!-- FIN DE ZONA DE VIDEO DE POKEMON GENERATIONS-->
<!-- ZONA DE LOGIN DE POKEMON GENERATIONS -->
            <div id="lado_derecho" class="col-md-5 vh-100 d-flex overflow-hidden " style="background-color: rgb(0, 0, 0, 0.8);">
                <!-- LOGO POKEMON -->
                <div class="row">
                    <div id="container_pokemon" class=""></div>
                            <div class="col-md-12 col-xs-12 text-center img-fluid fixed-size-image mx-auto">
                                <img id="logo_pokemon" src="/Login_resources/Pokemon_logo.png" alt="">
                            </div>
                    <!-- LOGO GENERATIONS -->
                    <div id="container_generations">
                            <div class="col-md-12 col-xs-6 text-center img-fluid fixed-size-image mx-auto">
                                <img id="generations_logo" src="/Login_resources/Generations_logo.png" alt="">
                            </div>
                    </div>
                    
                    <div id="container_textos">
                        <!-- TEXTO USUARIO -->
                        <div id="text_user" class="col-md-12 mx-auto" style="width:50%;">
                            <label for="exampleInputEmail1" class="form-label" style="color: white;">NOMBRE DE ENTRENADOR</label>
                            <input id="texto_usuario" type="text" class="form-control" style="background-color: black; color: white;"  aria-describedby="emailHelp">
                            <div id="User" class="form-text" style="color: white;">Recuerda cuidar a todos tus pokemon con mucho cariño.</div>
                        </div>
                        <!-- TEXTO CONTRASEÑA -->
                        <div id="text_password" class="col-md-12  mx-auto" style="width:50%;">
                            <label for="exampleInputEmail1" class="form-label" style="color: white;">CONTRASEÑA DE ENTRENADOR</label>
                            <input id="texto_contraseña" type="password" class="form-control" style="background-color: black; color: white;" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="" class="form-text" style="color: white;">Recuerda no revelar tu contraseña de entrenador pokemon.</div>
                    </div>  
                    <div id="botones">
                        <div class="d-sm-12 gap-2 d-md-block text-center ">
                            <button id="button_iniciar_sesion" type="button" onclick="enviarFormulario" class="btn btn-primary ">INICIAR SESION</button>
                        </div>
                        <div class=" d-sm-12 gap-2 d-md-block text-center ">
                            <a id="volver_login" href="Registro.HTML" class="btn btn-info" role="button">REGISTRARSE</a>
                            <a id="volver_login" href="http://pokenacho.test/admin" class="btn btn-info" role="button">SOS ADMIN?</a>                  
                        </div>
                    </div> 
                </div>
        </div>    
    </div>
</body>
</html>