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
                        <h3> Agregar Curso</h3>
                    </div>

                    <div class="panel-body">

                        <form method="POST" action="{{ route('curso.store') }}">

                            {{ csrf_field() }}

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label> Nombre del curso</label>
                                        <input type="text" id="nombre" name="nombre" placeholder="nombre" value="{{ old('nombre') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label> Instructor </label>
                                        <input type="instructor" id="instructor" name="instructor" placeholder="instructor" value="{{ old('instructor') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label> Duracion </label>
                                        <input type="text" id="duracion" name="duracion" placeholder="duracion" value="{{ old('duracion') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label> Fecha de inicio del curso </label>
                                        <input type="fecha_inicio" id="fecha_inicio" name="fecha_inicio" placeholder="fecha_inicio" value="{{ old('fecha_inicio') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label> Fecha de conclusion del curso </label>
                                        <input type="fecha_fin" id="fecha_fin" name="fecha_fin" placeholder="fecha_fin" value="{{ old('fecha_fin') }}">
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <button type="submit" class="btn btn-success"> Guardar</button>
                                <a href="{{ route('curso.index') }}" class="btn btn-default">Atras</a>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection