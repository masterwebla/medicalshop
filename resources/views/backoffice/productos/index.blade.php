@extends('backoffice.template')
@section('titulo','Listado de Productos')

@section('contenido')
	<div class="container">
		<h1>Listado de Productos</h1>
		<a class="btn btn-success" href="{{ route('productos.create') }}">Crear Producto</a>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Descripcion</th>
					<th>Costo</th>
					<th>Precio</th>
					<th>Cantidad</th>
					<th>Unidad</th>
					<th>Estado</th>
					<th>Opciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($productos as $producto)
					<tr>
						<td>{{$producto->nombre}}</td>
						<td>{{$producto->descripcion}}</td>
						<td>{{$producto->costo}}</td>
						<td>{{$producto->precio}}</td>
						<td>{{$producto->cantidad}}</td>
						<td>{{$producto->unidad_id}}</td>
						<td>{{$producto->estado_id}}</td>
						<td>
							<a class="btn btn-warning" href="{{ route('productos.edit',$producto->id) }}"><i class="far fa-edit"></i></a>

							<a class="btn btn-primary" href="#"><i class="far fa-image"></i></a>

						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection