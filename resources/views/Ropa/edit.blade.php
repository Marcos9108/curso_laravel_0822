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
                        <h3>Cambiar prenda de ropa</h3>
                    </div>

                    <div class="panel-body">

                        <form method="POST" action="{{ route('ropa.store') }}">

                            {{ csrf_field() }}

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label># Pedido</label>
                                        <input type="text" id="pedido" name="pedido" placeholder="Pedido" value="{{ old('pedido') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Ropa</label>
                                        <select class="form-group" id="tipo" name="tipo">
                                            <option selected>Seleccionar Tipo</option>
                                            <option value="Abrigo">Abrigo</option>
                                            <option value="Blusa">Blusa</option>
                                            <option value="Camisa">Camisa</option>
                                            <option value="Cazadora">Cazadora</option>
                                            <option value="Chaqueta">Chaqueta</option>
                                            <option value ="Chaleco">Chaleco</option>
                                            <option value ="Chamarra">Chamarra</option>
                                            <option value="Falda">Falda</option>
                                            <option value="Vestido">Vestido</option>
                                            <option value="Traje">Traje</option>
                                            <option value="Pantalones">Pantalones</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Talla</label>
                                        <select class="form-group" id="talla" name="talla">
                                            <option selected>Seleccionar Talla de Ropa</option>
                                            <option value="XS">Extra Pequeña</option>
                                            <option value="S">Pequeña</option>
                                            <option value="M">Mediana</option>
                                            <option value="L">Grande</option>
                                            <option value="XL">Extra Grande</option>
                                            <option value ="XXL">Extra Extra Grande</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Genero</label>
                                        <select class="form-group" id="genero" name="genero">
                                            <option selected>Seleccionar Genero</option>
                                            <option value="Hombre">Masculino</option>
                                            <option value="Mujer">Femenino</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Marca</label>
                                        <select class="form-group" id="marca" name="marca">
                                            <option selected>Seleccionar Marca de Ropa</option>
                                            <option value="Aeropostale">Aeropostale</option>
                                            <option value="Lacoste">Lacoste</option>
                                            <option value="Zara">Zara</option>
                                            <option value="Ralph">Ralph Lauren</option>
                                            <option value="Levis">Levis</option>
                                            <option value ="CK">Calvin Klein</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Cantidad</label>
                                        <input type="number" id="cantidad" name="cantidad" placeholder="Cantidad" value="{{ old('cantidad') }}">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Color</label>
                                        <select class="form-group" id="color" name="color">
                                            <option selected>Seleccionar Color de Ropa</option>
                                            <option value="Rojo">Rojo</option>
                                            <option value="Amarillo">Amarillo</option>
                                            <option value="Azul">Azul</option>
                                            <option value="Blanco">Blanco</option>
                                            <option value="Cafe">Cafe</option>
                                            <option value ="Morado">Morado</option>
                                            <option value ="Negro">Negro</option>
                                            <option value ="Verde">Verde</option>
                                            <option value ="Rosa">Rosa</option>
                                            <option value ="Gris">Gris</option>
                                        </select>
                                    </div>
                                </div>
                            <div class="row">
                                <button type="submit" class="btn btn-success"> Guardar</button>
                                <a href="{{ route('ropa.index') }}" class="btn btn-default">Atras</a>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection