@extends('layouts.app')

@section('content')
    <div class="row">
        <section class="content">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <div>
                            <h3> Listado Ropa</h3>
                        </div>

                        @if(\Illuminate\Support\Facades\Session::has('success'))
                            <div class="alert-info">
                                {{\Illuminate\Support\Facades\Session::get('success')}}
                            </div>
                        @endif

                        <div class="pull-right">
                            <a href="{{ route('ropa.create') }}" class="btn btn-success">Agregar prenda de ropa</a>
                        </div>


                        <div class="table-container">
                            <table id="tablaRopa" class="table table-bordered table-striped">
                                <thead>
                                <th>Pedido</th>
                                <th>Ropa</th>
                                <th>Talla</th>
                                <th>Genero</th>
                                <th>Marca</th>
                                <th>Cantidad</th>
                                <th>Color</th>
                                <th>Acciones</th>
                                </thead>

                                <tbody>
                                @if($ropa->count())
                                    @foreach($ropa as $ropa)
                                        <tr>
                                            <td>{{ $ropa->pedido    }}</td>
                                            <td>{{ $ropa->ropa      }}</td>
                                            <td>{{ $ropa->talla     }}</td>
                                            <td>{{ $ropa->genero    }}</td>
                                            <td>{{ $ropa->marca     }}</td>
                                            <td>{{ $ropa->cantidad  }}</td>
                                            <td>{{ $ropa->color     }}</td>
                                            <td>
                                                <a class="btn btn-primary btn-xs" href="{{route('ropa.show' , $ropa->pedido)}}" ><span class="glyphicon glyphicon-eye-open"></span></a>
                                                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-delete-{{$ropa->pedido}}">Eliminar</button>
                                                <!-- Modal Confirm Delete-->
                                                <div class="modal fade" id="modal-delete-{{$ropa->pedido}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <form action="{{ route('ropa.destroy', $ropa->pedido) }}" method="post">
                                                            <input name="_method" type="hidden" value="DELETE">
                                                            {{csrf_field()}}
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    ¿ Desea eliminar al registro {{$ropa->titulo}} de {{$ropa->director}}?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                                    <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <!-- Final Modal-->

                                                <a class="btn btn-primary btn-xs" href="{{route('ropa.edit', $ropa->pedido)}}" >Editar</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="8"> No hay Registros</td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>
            </div>

        </section>

    </div>

@endsection