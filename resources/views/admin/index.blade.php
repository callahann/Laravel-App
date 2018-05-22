@extends('layouts.principal')

@section('content')

<div class="container">
	<strong><center><font size="10" color="black">Gobierno</font></center></strong>
	<center><h2>Nuevas Medidas:</h2></center>
	<div class="list-group">

	<!-- Se itera sobre la informacion obtenida desde el controlador para ser mostrada en la vista. -->
		@foreach($donacions as $donacion)

			<a href="/admin/{{$donacion->id}}" class="list-group-item">{{ $donacion->medidas_id }} : Donación</a>

		@endforeach

		@foreach($bingos as $bingo)

			<a href="/admin/{{$bingo->id}}" class="list-group-item">{{ $bingo->medidas_id }} : Bingo</a>

		@endforeach

		@foreach($recoleccions as $recoleccion)

			<a href="/admin/{{$recoleccion->id}}" class="list-group-item">{{ $recoleccion->medidas_id }} : Recolección</a>

		@endforeach

		@foreach($voluntariados as $voluntariado)

			<a href="/admin/{{$voluntariado->id}}" class="list-group-item">{{ $voluntariado->medidas_id }} : Voluntariado</a>

		@endforeach
	</div>
</div>


@endsection

