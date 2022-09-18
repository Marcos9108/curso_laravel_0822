@extends('layouts.app')

@section('content')
    <div class="row">
        <section class="content">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-body" >
                        <div>
                            <h3 class="text-primary"> Lista de libros</h3>
                        </div>

                        @if(\Illuminate\Support\Facades\Session::has('success'))
                            <div class="alert-info">
                                {{\Illuminate\Support\Facades\Session::get('success')}}
                            </div>
                        @endif
                        
                        <div class="pull-right">
                            <a href="{{ route('libro.create') }}" class="btn btn-success">Agregar libro</a>
                        </div>


                        <div class="table-container">
                            <table id="tablaEmpleados" class="table table-bordered table-striped">
                                <thead>
                                    <th>Nombre</th>
                                    <th>Editorial</th>
                                    <th>Genero</th>
                                    <th>Lanzamiento</th>
                                    <th>Autor</th>
                                </thead>

                                <tbody>
                                @if($libros->count())
                                    @foreach($libros as $libro)
                                    <tr>
                                        <td>{{ $libro->nombre }}</td>
                                        <td>{{ $libro->editorial }}</td>
                                        <td>{{ $libro->genero }}</td>
                                        <td>{{ $libro->lanzamiento }}</td>
                                        <td>{{ $libro->autor }}</td>
                                        <td>
                                            <a class="btn btn-primary btn-xs" href="{{route('libro.show', $libro->id)}}" ><span class="glyphicon glyphicon-eye-open"></span></a>
                                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-delete-{{$libro->id}}">Eliminar</button>
                                            <!-- Modal Confirm Delete-->
                                            <div class="modal fade" id="modal-delete-{{$libroo->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <form action="{{route('libroo.destroy', $libro->id)}}" method="post">
                                                        <input name="_method" type="hidden" value="DELETE">
                                                        {{csrf_field()}}
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Eliminar libro</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                ¿ Desea eliminar el libro {{$libro->nombre}} ?
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

                                            <a class="btn btn-primary btn-xs" href="{{route('libro.edit', $libro->id)}}" >Editar</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5"> No hay Registros</td>
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