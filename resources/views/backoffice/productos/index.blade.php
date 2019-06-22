@extends('backoffice.template')
@section('titulo','Listado de Productos')

@section('contenido')
	<div class="container">
		<h1>Listado de Productos</h1>
		<a class="btn btn-success" href="{{ route('productos.create') }}">Crear Producto</a>
		<!-- BOTON EXPORTAR PDF -->
		<a class="btn btn-warning" href="{{ route('productos-pdf') }}"><i class="far fa-file-pdf"></i></a>

		<!-- BOTON EXPORTAR EXCEL -->
		<a class="btn btn-primary" href="{{ route('productos-excel') }}"><i class="far fa-file-excel"></i></a>
		<button type="button" class="btn btn-info" data-toggle="modal" data-target="#impExcel"><i class="far fa-file-excel"></i></button>

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
						<td>{{$producto->unidad->nombre}}</td>
						<td><span class="badge @if($producto->estado_id == 3)badge-danger @else badge-success @endif">
								{{$producto->estado->nombre}}
							</span>
						</td>
						<td>
							<a class="btn btn-warning" href="{{ route('productos.edit',$producto->id) }}"><i class="far fa-edit"></i></a>

							@if($producto->estado_id != 3)
								<a class="btn btn-danger" href="{{ route('producto-inactivar',$producto->id) }}"><i class="fas fa-trash"></i></a>
							@endif

							<a class="btn btn-primary" href="{{ route('img',$producto->id) }}"><i class="far fa-image"></i></a>

						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<!-- The Modal -->
	@include('backoffice.productos.modalexcel')
@endsection