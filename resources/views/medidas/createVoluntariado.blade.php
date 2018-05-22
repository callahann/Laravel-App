@extends('layouts.principal')

@section('content')

	<div class="container">

		<h1>Creación Nueva Medida: VOLUNTARIADO</h1>

		<br>

		@if(count($errors) > 0)

			<div class="alert alert-danger">

				<ul>
					
					@foreach($errors->all() as $error)

					<li>{{ $error }}</li>

					@endforeach

				</ul>
				
			</div>

		@endif

		<form action="{{route('store_voluntariado_path')}}" method="POST">

			{{ csrf_field() }}

			<div class="form-group">
					<label for="fecha_inicio">Fecha de Inicio: </label>
					<input type="date" name="fecha_inicio">
				
			</div>

			<!--</dir>-->

			<div class="form-group">

					<label for="fecha_termino">Fecha de Término: </label>
					<input type="date" name="fecha_termino">
				
			</div>

			<!--</dir>-->

			<div class="form-group">

				<label for="">Tipo de Voluntariado:</label>
				<input type="text" name="tipo_vol" class="form-control" value="{{ old('tipo_vol') }}"/>
				
			</div>

			<div class="form-group">

				<label for="">Cantidad de personas esperadas:</label>
				<input type="number" name="cant_personas_esperadas" class="form-control" value="{{ old('cant_personas_esperadas') }}"/>

			</div>

			<FONT COLOR = #E0F8EC>{{$catastrofes->id}}</FONT>
			<input type="hidden" name="id" value="{{$catastrofes->id}}">
			
			<br>

			<div class="form-group">
				
				<button type="submit" class="btn btn-primary">Crear Voluntariado</button>

			</div>

		</form>
		
	</div>

@endsection