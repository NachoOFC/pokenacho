@vite (["resources/css/ruleta.css", "resources/js/index.js"])
<head>
    
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
@extends('Layouts.app')

@section('title','Ruleta')
<body>
@section('content')
    


    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="col-4"></div>
            <div class="col-4 ">
                <div class="text-center">
                    <img src="{{asset('images/ruleta.gif')}}" alt="ruleta" class="img-fluid">
                </div>
            </div>
            <div class="col-4">
                <div class="text-center">
                    <h3>Monedas: 
                        {{ $pokedollar }}
                        <img src="{{asset('images/pokédollar.png')}}" alt="pokédollar" width: 1em height: 1em vertical-align: middle class="img-fluid">
                    </h3>


                   
                    {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                        Open modal
                    </button> --}}




                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="col-8">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex justify-content-center">
                                <div id="marcador"></div>
                                <div id="ruleta"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-3">
                            <button id="btnGirar" type="button" class="btn btn-primary">Girar Ruleta</button>
                        </div>
                    </div>
                </div>
            </div>
            



            <!-- The Modal -->
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Felicidades</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                
                        <!-- Modal body -->
                        <div class="modal-body">
                            <p> Conseguiste un <p id="premio"></p></p>
                        </div>
                
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                
                    </div>
                </div>
            </div>



        </div>
    </div>







    {{-- la ruleta funciona con monedas --}}
    

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