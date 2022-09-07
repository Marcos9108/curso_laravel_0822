@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{trans('app.home.logged_in')}}

                    <div>
                        <a href="{{route('empleado.index')}}" class="btn btn-info" > {{trans('app.home.go_to_employes')}}</a>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
