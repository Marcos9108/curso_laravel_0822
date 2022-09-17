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
                        <h3> Agregar Puesto</h3>
                    </div>

                    <div class="panel-body">

                        <form method="POST" action="{{ route('puestos.store') }}">

                            {{ csrf_field() }}

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Nombre</label>
                                        <input type="text" id="nombre" name="nombre" placeholder="nombre" value="{{ old('nombre') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Requisitos</label>
                                        <input type="text" id="requisitos" name="requisitos" placeholder="requisitos" value="{{ old('requisitos') }}">
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Rango salario</label>
                                        <input type="text" id="rango_salario" name="rango_salario" placeholder="rango_salario" value="{{ old('rango_salario') }}">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Puesto disponible</label>
                                        <br>
                                        <select class="form-select" name="puesto_disponible">
                                            <option selected>Seleccionar puesto</option>
                                            <option value="Full stack">Full stack</option>
                                            <option value="Front end">Front end</option>
                                            <option value="Back end">Back end</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <button type="submit" class="btn btn-success"> Guardar</button>
                                <a href="{{ route('puestos.index') }}" class="btn btn-default">Atras</a>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

