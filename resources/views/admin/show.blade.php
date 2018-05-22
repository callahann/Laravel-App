@extends('layouts.principal')

@section('content')

<div class="container">
	<h2>{{ $usuario->nombre }}</h2>
	<button>Bloquear Usuario</button>
	<h2>Medida</h2>
	<FONT SIZE = 4><strong>Tipo Medida: </strong> {{$dato->tipo_medida}}</FONT>
	<FONT SIZE = 4><strong>Descripción: </strong> {{$dato->descripcion}}</FONT>
	<button>Aceptar</button>
	<button>Rechazar</button>
	<form action="/admin">
    	<input type="submit" value="Atras" />
	</form>

</div>

@endsection