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
                        <h3> Previsualizar prenda de ropa</h3>
                    </div>

                    <div class="panel-body">

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Pedido: {{$ropa->pedido}}</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> Ropa: {{ $ropa->ropa}} </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> Talla: {{$ropa->ropa}} </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> Genero: {{$ropa->genero}}</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> Marca: {{$ropa->marca}}</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> Cantidad: {{$ropa->cantidad}} </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> Color: {{$ropa->color}}</label>
                                </div>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-lg-1">
                                <a href="{{ route('ropa.index') }}" class="btn btn-default btn-sm">Atras</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection