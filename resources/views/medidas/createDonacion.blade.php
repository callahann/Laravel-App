@extends('layouts.principal')

@section('content')

	<div class="container">

		<h1>Creación Nueva Medida: DONACIONES</h1>

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

		<form action="{{route('store_donacion_path')}}" method="POST">

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

				<label for="">Meta a recaudar:</label>
				<input type="number" name="meta_don" class="form-control" value="{{ old('meta_don') }}"/>

			</div>

			<div class="form-group">

				<label for="">N° de Cuenta:</label>
				<input type="number" name="cuenta" class="form-control" value="{{ old('cuenta') }}"/>

			</div>
			
			<FONT COLOR = #E0F8EC>{{$catastrofes->id}}</FONT>
			<input type="hidden" name="id" value="{{$catastrofes->id}}">

			<br>

			<div class="form-group">
				
				<button type="submit" class="btn btn-primary">Crear Donación</button>

			</div>

		</form>
		
	</div>

@endsection