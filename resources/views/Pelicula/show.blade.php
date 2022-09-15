@extends('layouts.app')

@section('content')
    <div class="row">
        <section class="content">
            <div class="col-md-8 col-md-offset-2">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3> Datos de la Pelicula</h3>
                    </div>

                    <div class="panel-body">

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>ID: {{$pelicula->id}}</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> Titulo: {{ $pelicula->titulo }} </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> Director: {{$pelicula->director}} </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> Año: {{$pelicula->año}}</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> Duracion: {{$pelicula->duracion }}</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> Genero: {{$pelicula->genero}} </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> Existencia: {{$pelicula->existencia}}</label>
                                </div>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-lg-1">
                                <a href="{{ route('pelicula.index') }}" class="btn btn-default btn-sm">Atras</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection