@extends('layouts.app')

@section('content')
    <div class="row">
        <section class="content">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <div>
                            <h3> Listado Puestos</h3>
                        </div>

                        @if(\Illuminate\Support\Facades\Session::has('success'))
                            <div class="alert-info">
                                {{\Illuminate\Support\Facades\Session::get('success')}}
                            </div>
                        @endif

                        <div class="pull-right">
                            <a href="{{ route('puestos.create') }}" class="btn btn-success">Agregar Puesto</a>
                        </div>

                        <div class="table-container">
                            <table id="tablaPuestos" class="table table-bordered table-striped">
                                <thead>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Requisitos</th>
                                <th>Rango salario</th>
                                <th>Puesto disponible</th>
                                <th>Acciones</th>
                                </thead>

                                <tbody>
                                @if($puestos->count())
                                    @foreach($puestos as $puestos)
                                        <tr>
                                            <td>{{ $puestos->id}}</td>
                                            <td>{{ $puestos->nombre}}</td>
                                            <td>{{ $puestos->requisitos}}</td>
                                            <td>{{ $puestos->rango_salario}}</td>
                                            <td>{{ $puestos->puesto_disponible}}</td>
                                            <td>
                                                <a class="btn btn-primary btn-xs" href="{{route('puestos.show' , $puestos->id)}}" ><span class="glyphicon glyphicon-eye-open"></span></a>
                                                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-delete-{{$puestos->id}}">Eliminar</button>
                                                <!-- Modal Confirm Delete-->
                                                <div class="modal fade" id="modal-delete-{{$puestos->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <form action="{{ route('puestos.destroy', $puestos->id) }}" method="post">
                                                            <input name="_method" type="hidden" value="DELETE">
                                                            {{csrf_field()}}
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Eliminar Puesto</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    ¿Desea eliminar a {{$puestos->nombre}}?
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

                                                <a class="btn btn-primary btn-xs" href="{{route('puestos.edit', $puestos->id)}}" >Editar</a>
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
