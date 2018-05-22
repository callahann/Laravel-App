@extends('layouts.principal')

@section('content')

	<div class="container">

		<center><font size="6" color="blue">¡Realiza un comentario!</font></center>

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

		<div class="container">
			  <div class="row">
			  <div class="col-md-8 col-md-offset-2">
			  <div class="panel panel-default">
			  
			  <div class="panel-body">
			 <form action="/create" method="POST" role="form">
			  <div class="form-group">

			  {{csrf_field()}}

			  <textarea rows="6" name="comment" class="form-control"></textarea>
			  </div>
			  <button type="submit" class="btn btn-default">Comentar</button>
			</form> 
			  </div>
			  </div>
			  </div>
			 </div>

@endsection