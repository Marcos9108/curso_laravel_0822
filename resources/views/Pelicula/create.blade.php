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
                        <h3> Agregar Pelicula</h3>
                    </div>

                    <div class="panel-body">

                        <form method="POST" action="{{ route('pelicula.store') }}">

                            {{ csrf_field() }}

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label> Titulo</label>
                                        <input type="text" id="titulo" name="titulo" placeholder="titulo" value="{{ old('titulo') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label> Director </label>
                                        <input type="director" id="director" name="director" placeholder="director" value="{{ old('director') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label> Año </label>
                                        <input type="text" id="año" name="año" placeholder="2000" value="{{ old('año') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label> Duracion </label>
                                        <input type="text" id="duracion" name="duracion" placeholder="200 minutos" value="{{ old('duracion') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label> Genero </label>
                                        <select class="form-group" name="genero" id="genero">
                                            <option selected>Seleccionar Genero</option>
                                            <option value="Terror">Terror</option>
                                            <option value="Comedia">Comedia </option>
                                            <option value="Romance">Romance</option>
                                            <option value="Drama">Drama</option>
                                            <option value ="Ficcion">Ficcion</option>
                                            <option value ="Accion">Accion</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label> Existencia</label>

                                        <div class="radio">
                                            <label><input type="radio" id="existencia" name="existencia" value="si">En existencia</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" id="existencia" name="existencia" value="no">Sin existencia</label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <button type="submit" class="btn btn-success"> Guardar</button>
                                <a href="{{ route('pelicula.index') }}" class="btn btn-default">Atras</a>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection