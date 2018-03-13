@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs12">
		<h3>Nueva Categoría</h3>
		@if (count($errors)>0)
		<div class="alert alert-danger">
			<ul>
			@foreach ($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach	
				<li></li>
			</ul>
		</div>
		@endif

		{!!Form::open(array('url'=>'.admin/contactenos','method'=>'POST','autocomplete'=>'off'))!!}
		{{Form::token()}}
		<div class="form-group">
			<label for="titulo">Titulo</label>
			<input type="text" name="titulo" class="form-control" placeholder="Título...">
		</div>
		<div class="form-group">
			<label for="direccion">Dirección</label>
			<input type="text" name="direccion" class="form-control" placeholder="Dirección...">
		</div>
		<div class="form-group">
			<label for="numtel">Número Telefónico</label>
			<input type="text" name="numtel" class="form-control" placeholder="Número Telefónico...">
		</div>
		<div class="form-group">
			<label for="correo">Correo</label>
			<input type="email" name="correo" class="form-control" placeholder="Correo...">
		</div>
		<div class="form-group">
			<button class="btn btn-primary" type="submit">Guardar</button>
			<button class="btn btn-danger" type="submit">Cancelar</button>
		</div>
		{!!Form::close()!!}

	</div>
</div>

@endsection