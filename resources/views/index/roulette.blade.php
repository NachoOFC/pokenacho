<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="/css/ruleta.css">
    <script src="/js/index.js" defer></script>
	<script src="/js/helpers.js"></script>

    @extends('Layouts.app')

    @section('title','Ruleta')

</head>
<body>
@section('content')
    


    <div class="container">

        <div class="row">
            <div class="col-8 ">
                <div class="text-center">
                    <h1>Ruleta</h1>
                    {{-- cambiar por gif animado estilo 2da generacion --}}
                </div>
            </div>

            <div class="col-4">
                <div class="text-center">
                    <h3>Monedas: 
                        {{ $pokedollar }}
                        <img src="{{asset('images/pokédollar.png')}}" alt="pokédollar" width: 1em height: 1em vertical-align: middle class="img-fluid">
                    </h3>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="row">

            <div class="col-8">
                <div class="container">
                    <div class="row">
                        
                        <h2>todo lo que sería la ruleta</h2>
                        {{-- intento 4 --}}
                        <div class="col-md-12">
                            <div class="d-flex justify-content-center">
                                <div id="ruleta">
                                </div>
                            </div>
                        </div>
                    </div>

                    

                    <div class="row justify-content-center">
                        <div class="col-md-2">
                            <button id="btnGirar" type="button" onclick="miRuleta.startAnimation();" class="btn btn-primary">Girar Ruleta</button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="col-md-4 col-xs-12">
                <div class="card" style="height: 75%">
                    <div class="text-center">
                        <h4>Premios</h4>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-6">
                            <div class="overflow-auto" style="height: 73%">
                                <div class="text-center">
                                    <h4>Pokémon</h4>
                                    <h5>pokémon</h5>
                                    <h5>pokémon</h5>
                                    <h5>pokémon</h5>
                                    <h5>pokémon</h5>
                                    <h5>pokémon</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="text-center">
                                <h4>Objeto</h4>
                                <h5>objeto</h5>
                                <h5>objeto</h5>
                                <h5>objeto</h5>
                                <h5>objeto</h5>
                                <h5>objeto</h5>
                                <h5>objeto</h5>
                                <h5>objeto</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        
    </div>
    

    

    {{-- la ruleta funciona con monedas --}}

    {{-- ver ruleta --}}
        {{-- x    de lado a lado --}}
        {{-- x  con visor (cuadricula) en medio --}}
        {{-- se tira y luego se va frenando      jquery stop --}}
        {{-- bloquear el boton mientras se tira la ruleta --}}
        
    {{-- Definir de forma aleatoria el resultado --}}
        {{-- random --}}
        {{-- buscar como hacer una ruleta --}}

    {{-- Ganar un item, con stats aleatorios --}}
        {{-- crear items? --}}
        {{-- objeto aleatorio --}}

    {{-- Ganar un Pokemon con stats aleatorios --}}
        {{-- en realidad que te salga un pokemon aleatorio --}}
            {{-- será que sus stats sean aleatorios o el pokemon es aleatorio? --}}
        
@endsection
</body>

{{-- recibe --}}
    {{-- monedas --}}
    {{-- pokemones --}}
    {{-- objetos --}}

{{-- devuelve --}}
    {{-- pokemon u objeto --}}



{{-- titulo --}} 
    {{-- al costado monedas actuales --}}
{{-- ruleta en si --}}
    {{-- x  al costado lista de posibles premios --}}
        {{-- x  lista de pokemones (lista deslizante) --}}
        {{-- x  lista de objetos (de ser necesario lista deslizante) --}}
{{-- botones --}}


{{-- parametros --}}
{{-- x  va generando nuevos elementos al costado que se van sumando a la ruleta --}}
