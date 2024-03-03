@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tareas') }}</div>

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
                                                <h4 class="card-title">Filtro:</h4>
                                                <form method="post" action="{{action([\App\Http\Controllers\TareaController::class,"filtrar"])}}">
                                                    <div class="add-items d-flex">

                                                        @csrf
                                                        <input name="titulo" type="text" class="form-control" placeholder="Titulo" style="margin-right: 20px">

                                                        <button class="add btn btn-primary font-weight-bold todo-list-add-btn">filtrar</button>

                                                    </div>
                                                </form>
                                                <br>
                                                <form method="post" action="{{action([\App\Http\Controllers\TareaController::class,"filtrarOrden"])}}">
                                                    <div class="add-items d-flex">

                                                        @csrf
                                                        <input name="orden" type="text" class="form-control" placeholder="Orden" style="margin-right: 20px">

                                                        <button class="add btn btn-primary font-weight-bold todo-list-add-btn">filtrar</button>

                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                        <br>
                                        <div class="card px-3">
                                            <div class="card-body">
                                                <h4 class="card-title">Tareas:</h4>
                                                <form method="post" action="{{action([\App\Http\Controllers\TareaController::class,"agregar"])}}">
                                                <div class="add-items d-flex">

                                                        @csrf
                                                        <input name="tarea" type="text" class="form-control" placeholder="Que tarea necesitamos hacer?" style="margin-right: 20px">
                                                        <input name="orden" type="text" class="form-control" placeholder="Orden" style="margin-left: 5px;margin-right: 25px;width: 75px">

                                                        <button class="add btn btn-primary font-weight-bold todo-list-add-btn">Agregar</button>

                                                </div>
                                                </form>
                                                <div class="list-wrapper">
                                                    <br>
                                                    <ul class="d-flex flex-column-reverse todo-list">
                                                        @foreach($datos as $value)
                                                            <div id="{{$value->id}}">
                                                                <label class="form-check-label"><span style="font-weight: bold">{{$value->orden}}</span>.  {{$value->titulo}}. <a href="{{ route('tareas.eliminar', $value->id) }}"><i class="fas fa-minus-circle"></i></a></label>
                                                            </div>

                                                        @endforeach


                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
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


