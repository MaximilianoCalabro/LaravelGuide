@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs12">
		<h3>Lista <a href="contactenos/create"><button>Nuevo</button></a></h3>
		@include('admin.contactenos.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Título</th>
					<th>Dirección</th>
					<th>Número Telefónico</th>
					<th>Correo</th>
				</thead>
				@foreach ($contactenos as $cat)
				<tr>
					<td>{{ $cat->titulo }}</td>
					<td>{{ $cat->direccion }}</td>
					<th>{{ $cat->numtel }}</th>
					<th>{{ $cat->correo }}</th>
					<td>
						<a href="{{URL::action('ContactenosController@edit',$cat->id)}}"><button class="btn btn-info">Editar</button></a>
						<a href=""><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@endforeach
			</table>
		</div>
		{{$contactenos->render()}}
	</div>
</div>
@endsection