@extends('layouts.principal')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">¡Has ingresado correctamente!</div>

                <div class="panel-body">
                    Bienvenido a Chile Unido, {{Auth::user()->name}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
