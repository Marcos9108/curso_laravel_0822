@extends('layouts.app')

@section('content')
    <div class="row">
        <section class="content">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <div>
                            <h3> Listado Peliculas</h3>
                        </div>

                        @if(\Illuminate\Support\Facades\Session::has('success'))
                            <div class="alert-info">
                                {{\Illuminate\Support\Facades\Session::get('success')}}
                            </div>
                        @endif

                        <div class="pull-right">
                            <a href="{{ route('curso.create') }}" class="btn btn-success">Agregar Curso</a>
                        </div>


                        <div class="table-container">
                            <table id="tablaCursos" class="table table-bordered table-striped">
                                <thead>
                                <th>ID</th>
                                <th>Curso</th>
                                <th>Instructor</th>
                                <th>Duración</th>
                                <th>Fecha de inicio de curso</th>
                                <th>Fecha de conclusion del curso</th>
                                <th>Acciones</th>
                                </thead>

                                <tbody>
                                @if($curso->count())
                                    @foreach($curso as $curso)
                                        <tr>
                                            <td>{{ $curso->id }}</td>
                                            <td>{{ $curso->nombre }}</td>
                                            <td>{{ $curso->instructor }}</td>
                                            <td>{{ $curso->duracion }}</td>
                                            <td>{{ $curso->fecha_inicio }}</td>
                                            <td>{{ $curso->fecha_fin }}</td>
                                            <td>
                                                <a class="btn btn-primary btn-xs" href="{{route('curso.show' , $curso->id)}}" ><span class="glyphicon glyphicon-eye-open"></span></a>
                                                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-delete-{{$curso->id}}">Eliminar</button>
                                                <!-- Modal Confirm Delete-->
                                                <div class="modal fade" id="modal-delete-{{$curso->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <form action="{{ route('curso.destroy', $curso->id) }}" method="post">
                                                            <input name="_method" type="hidden" value="DELETE">
                                                            {{csrf_field()}}
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Eliminar Curso</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    ¿Desea eliminar al curso {{$curso->nombre}}?
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

                                                <a class="btn btn-primary btn-xs" href="{{route('curso.edit', $curso->id)}}" >Editar</a>
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