<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon Generations</title>
    <link rel="stylesheet" href="/Login_resources/Admin.CSS">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    <script src="/Login_resources/Admin.JS"></script>
    <audio id="Musica" src="/Login_resources/Musica_admin2.mp3" autoplay loop muted></audio>
    <div id="fondo"></div>
    <div id="container_base" class="container-fluid">
        <div class="row" >
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
                            <label for="exampleInputEmail1" class="form-label" style="color: white;">NOMBRE DE ADMINISTRADOR</label>
                            <input type="text" class="form-control" style="background-color: black; color: white;" id="userlabel" aria-describedby="emailHelp">
                            <div id="password" class="form-text" style="color: white;">Recuerda no abusar del gran poder que te confirieron.</div>
                        </div>
                        <!-- TEXTO CONTRASEÑA -->
                        <div id="text_password" class="col-md-12  mx-auto" style="width:50%;">
                            <label for="exampleInputEmail1" class="form-label" style="color: white;">CONTRASEÑA SUPERIOR</label>
                            <input id="texto_contraseña" type="password" class="form-control" style="background-color: black; color: white;" aria-describedby="emailHelp">
                            <div id="" class="form-text" style="color: white;">Recuerda no compartirla con los mortales.</div>
                    </div>
                        
                    <div id="botones">
                        <div class="d-sm-12 gap-2 d-md-block text-center ">
                            <button id="button_iniciar_sesion" type="button" class="btn btn-primary ">INICIAR SESION</button>
                        </div>

                        <div class=" d-sm-12 gap-2 d-md-block text-center ">
                            <a id="volver_login" href="http://pokenacho.test/login" class="btn btn-info" role="button">VOLVER A LOGIN</a>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
            <div id="lado_izquierdo" class="col-md-7 d-flex overflow-auto d-none d-sm-none d-md-block vh-100">     
                <div class="container">   
                    <div class="row vh-100" style="height: 50%;">
                                
                        <div class="col-md-8 align-self-center">
                            <div id="carrusel" class="carousel-slide" data-bd-ride="carousel">
                                <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div id="carouselanimation" class="carousel-item active">
                                        <img src="/Login_resources/Zekrom.jpg" alt="" class="d-block w-100"> 
                                        </div>
                                        <div class="carousel-item">
                                        <img src="/Login_resources/Reshiram.jpg" alt="" class="d-block w-100">
                                        </div>
                                        <div class="carousel-item">
                                        <img src="/Login_resources/Kyurem.jpg" alt="" class="d-block w-100">
                                        </div>
                                        <div class="carousel-item">
                                        <img src="/Login_resources/Dialga.jpg" alt="" class="d-block w-100">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="/Login_resources/Palkia.jpg" alt="" class="d-block w-100">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="/Login_resources/Giratina.jpg" alt="" class="d-block w-100">
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
                        <div class="col-md-4"></div>
              
                     
</body>
</html>