@extends('Layouts.app')

@section('title','Ruleta')

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
                        <div class="col-md-6">
                            <canvas id="canvas" height="400px" width="400px">
                            </canvas>
                        </div>
                    </div>

                    

                    <div class="row justify-content-center">
                        <div class="col-md-2">
                            <button id="btn-girar" type="button" onclick="miRuleta.startAnimation();" class="btn btn-primary">Girar Ruleta</button>
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

    <script>
        var miRuleta = new Winwheel({
    
            'numSegments' : 5,
            'outerRadius' : 270,
            'segments':[
                {'fillStyle': '#f1c40f', 'text': 'pokemon'},
                {'fillStyle': '#2ecc71', 'text': 'objeto'},
                {'fillStyle': '#e67e22', 'text': 'pokemon'},
                {'fillStyle': '#e74c3c', 'text': 'objeto'},
                {'fillStyle': '#8e44ad', 'text': 'pokemon'},
    
            ],
            'animation':{
                'type':'spinToStop',
                'duration': 6,
                'callbackFinished':'Mensaje()',
                'callbackAfter':'dibujarIndicador()'
            }
        });
    
        dibujarIndicador();
        function Mensaje() {
            var SegmentoSeleccionado = miRuleta.getIndicatedSegment();
            alert("Te ha tocado  " + SegmentoSeleccionado.text);
            if(SegmentoSeleccionado.text == "un Pokémon"){
                $('#myModal1').modal({backdrop:'static'});
            }
            if(SegmentoSeleccionado.text == "un objeto"){
                $('#myModal2').modal({backdrop:'static'});
            }
            if(SegmentoSeleccionado.text == "un Pokémon"){
                $('#myModal3').modal({backdrop:'static'});
            }
            if(SegmentoSeleccionado.text == "un objeto"){
                $('#myModal4').modal({backdrop:'static'});
            }
            if(SegmentoSeleccionado.text == "un objeto"){
                $('#myModal5').modal({backdrop:'static'});
            }
    
            miRuleta.stopAnimation(false);
            miRuleta.rotationAngle = 0;
            miRuleta.draw();
            dibujarIndicador();
        }
        function dibujarIndicador() {
            var ctx = miRuleta.ctx;
            ctx.strokeStyle = 'navy';
            ctx.fillStyle = 'black';
            ctx.lineWidth = 2;
            ctx.beginPath();
            ctx.moveTo(300,0);
            ctx.lineTo(320,0);
            ctx.lineTo(300,40);
            ctx.lineTo(280,0);
            ctx.stroke();
            ctx.fill();
        }
    
    
    
    </script>

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
