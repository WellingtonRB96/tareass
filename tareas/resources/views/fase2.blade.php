@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Fase 2') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="page-content page-container" id="page-content">
                            <div class="padding">
                                <div class="row container d-flex justify-content-center">
                                    <div class="col-md-12">
                                        <div class="card px-3">
                                            <div class="card-body">

                                                <h5>El lago musical</h5>
                                                <span>Hace mucho tiempo, un explorador comenzó a seguir algunos sonidos extraños dentro del
bosque. De pronto, llegó a un lago donde encontró en una fuente a 3 animalitos haciendo
sonidos parecidos a una canción. Pasó poco tiempo y el explorador pudo diferenciar qué
animal producía cada sonido.</span><br><br>
                                                <h5>Sonidos:</h5>
                                                <span>Rana: brr, birip, brrah, croac</span><br>
                                                <span>Libélula: fiu, plop, pep</span><br>
                                                <span>Grillo: cric-cric, trri-trri, bri-bri</span><br><br>
                                                <span>Después de un tiempo descubrió que estaban "cantando" juntos. Siempre que la rana
comenzaba con brr, la libélula respondía a su sonido frotando su cola con una rama
produciendo un sonido como fiu, después de la libélula, el grillo continuaba con cric-cric
pero, cada vez que la rana sonaba como brrah o croac todos los animales se silenciaron por
un tiempo, y luego continuaron de nuevo. Antes de que el cielo se oscureciera, el explorador
pudo escribir 3 "canciones" que todos hicieron juntos y se le ocurrieron estas notas.
.</span><br><br>
                                                <h5>Canciones:</h5>
                                                <span>brr, fiu, cric-cric, brrah</span><br>
                                                <span>pep, birip, trri-trri, croac</span><br>
                                                <span>bri-bri, plop, cric-cric, brrah</span><br><br>

                                                <h4 class="card-title">Ejercicio:</h4>
                                                <span>- Cuando se le da brr debe reproducir fiu, cric-cric, brrah de acuerdo con la primera canción.</span><br>
                                                <span>- Cuando se le da birip, debe reproducir trri-trri, croac según la segunda canción.</span><br>
                                                <span>- Cuando se le da plop debe reproducir cric-cric, brrah de acuerdo con la tercera canción.</span><br>
                                                <span>- Cuando se le da croac o brrah, no debería reproducir nada de acuerdo con todas las canciones.</span><br><br>
                                                <form method="post" action="{{action([\App\Http\Controllers\TareaController::class,"cantar"])}}">
                                                    <div class="add-items d-flex">

                                                        @csrf
                                                        <input name="sonido" type="text" class="form-control" placeholder="Parte de la cancion" style="margin-right: 20px">

                                                        <button class="add btn btn-primary font-weight-bold todo-list-add-btn">Seguir Cantando</button>

                                                    </div>
                                                </form>
                                                <br>
                                                <h4>Resultado:</h4>
                                                @if($datos != '')
                                                    <span style="font-size: 30px">{{$datos}}</span>
                                                @else
                                                    <span>No podemos cantar no escucho melodia para seguirte</span>
                                                @endif

                                            </div>
                                        </div>
                                        <br>

                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection


