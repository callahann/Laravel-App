@extends('layouts.principal')

@section('content')

	<div class="container">

		<h1>Nueva Catastrofe</h1>

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

		<form action="{{ route('store_catastro_path') }}" method="POST">

			{{ csrf_field() }}

			<div class="form-group">

				<label for="">Tipo Catastrofe:</label>
				<input type="text" name="tipo_cata" class="form-control" value="{{ old('tipo_cata') }}"/>
				
			</div>

			<!--</dir>-->

			<div class="form-group">

				<label for="">Nombre Catastrofe:</label>
				<input type="text" name="nombre_cata" class="form-control" value="{{ old('nombre_cata') }}"/>
				
			</div>

			<!--</dir>-->

			<div class="form-group">

				<label for="">Comuna:</label>
				<input type="text" name="comuna" class="form-control" value="{{ old('comuna') }}"/>
				
			</div>

			<div class="form-group">

				<label for="">Region:</label>
				
		            <form action="/action_page.php" method="get">
					  <input list="regions" name="region">
					  <datalist id="regions">
					    <option value="1">I - Tarapacá</option>
					    <option value="2">II - Antofagasta</option>
					    <option value="3">III - Atacama</option>
					    <option value="4">IV - Coquimbo</option>
					    <option value="5">V - Valparaíso</option>
					    <option value="6">VI - Bernardo O'Higgins</option>
					    <option value="7">VII - Maule</option>
					    <option value="8">VIII - Bío-bío</option>
					    <option value="9">IX - Araucanía</option>
					    <option value="10">X - Los Lagos</option>
					    <option value="11">XI - Aysén</option>
					    <option value="12">XII - Magallanes</option>
					    <option value="13">Metropolitana</option>
					    <option value="14">XIV - Los Ríos</option>
					    <option value="15">XV - Arica y Parinacota</option>
					  </datalist>
					</form>

			<br>
			<br>

			<div class="form-group">

				<label for="">Descripcion:</label>
				<textarea rows="5" name="descripcion" class="form-control">{{ old('descripcion') }}</textarea>

			</div>

			<br>

			<div class="form-group">
				
				<button type="submit" class="btn btn-primary">Crear Catastrofe</button>

			</div>

		</form>
		
	</div>

@endsection