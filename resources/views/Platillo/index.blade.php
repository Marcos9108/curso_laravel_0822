@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="alert alert-info text-center"><h1>Platillos De la Casa</h1></div>
    </div>

    @if(\Illuminate\Support\Facades\Session::has('success'))
        <div class="alert-info">
            {{\Illuminate\Support\Facades\Session::get('success')}}
        </div>
    @endif


    @if($plato->count())
        @foreach($plato as $platos)
            <div class=" panel-primary col-lg-4">
                <div class="panel-heading text-center">{{$platos->nombre_platillo}}</div>
                <div class="panel-body">{{$platos->especificacion}}</div>
                <div class="panel-footer"><h4 class="text-success">Precio:${{$platos->precio}}</h4></div>
            </div>
        @endforeach
    @else
        <div class=" panel-danger col-lg-12 text-center">
          <div class="panel-heading">No Hay Platillos que mostrar</div>
        </div>
    @endif

@endsection
