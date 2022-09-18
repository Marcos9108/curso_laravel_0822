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
                        <h3> Agregar Empleado</h3>
                    </div>

                    <div class="panel-body">

                        <form method="POST" action="{{ route('libro.store') }}">

                            {{ csrf_field() }}

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Nombre </label>
                                        <input type="text" id="nombre" name="nombre" placeholder="nombre">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label> Editorial</label>
                                        <input type="text" id="editorial" name="editorial" placeholder="editorial" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label> Genero</label>
                                        <input type="text" id="genero" name="genero" placeholder="Genero">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label> Lanzamiento </label>
                                        <input type="text" id="lanzamiento" name="lanzamiento" placeholder="fecha lanzamiento">
                                    </div>
                                </div>
                                <div class="col-md-4">
                             
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label> Autor </label>
                                        <input type="text" id="autor" name="autor" placeholder="Autor" >
                                    </div>
                                </div>
                                
                                </div>
                                
                                </div>
                                
                            </div>


                            <div class="row">
                                <button type="submit" class="btn btn-success"> Guardar libro</button>
                                <a href="{{ route('libro.index') }}" class="btn btn-default">Atras</a>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection