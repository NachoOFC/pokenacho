@extends('Layouts.app')

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
                    100
                    <img src="{{asset('images/pokédollar.png')}}" width: 1em height: 1em vertical-align: middle class="img-fluid">
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
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-2">
                        <button type="button" class="btn btn-primary">Girar Ruleta</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-xs-12">
            <div class="card">
                <div class="text-center">
                    <h4>Premios</h4>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="text-center">
                            <h4>Pokémon</h4>
                            {{-- creo que solo podrian aparecer los que ya tienes --}}
                            {{-- una lista completa pero aparecen los que ya tienes, el resto aparecen sin info ni foto --}}
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
        </div>
    </div>
    
</div>

{{-- la ruleta funciona con monedas --}}

{{-- ver ruleta --}}
    {{-- de lado a lado --}}
    {{-- con visor (cuadricula) en medio --}}
    {{-- se tira y luego se va frenando      jquery stop --}}
    {{-- bloquear el boton mientras se tira la ruleta --}}
    
{{-- Definir de forma aleatoria el resultado --}}
    {{-- random --}}
    {{-- buscar como hacer una ruleta --}}

{{-- Ganar un intem, con stats aleatorios --}}
    {{-- crear items? --}}
    {{-- objeto aleatorio --}}

{{-- Ganar un Pokemon con stats aleatorios --}}
    {{-- en realidad que te salga un pokemon aleatorio --}}
        {{-- será que sus stats sean aleatorios o el pokemon es aleatorio? --}}
    
@endsection

{{-- recibe --}}
    {{-- monedas --}}
    {{-- pokemones --}}
    {{-- objetos --}}

{{-- devuelve --}}
    {{-- pokemon u objeto --}}



{{-- titulo --}} 
    {{-- al costado monedas actuales --}}
{{-- ruleta en si --}}
    {{-- al costado lista de posibles premios --}}
        {{-- lista de pokemones (lista deslizante) --}}
        {{-- lista de objetos (de ser necesario lista deslizante) --}}
{{-- botones --}}


{{-- parametros --}}
{{-- va generando nuevos elementos al costado que se van sumando a la ruleta --}}
