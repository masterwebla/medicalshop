@extends('backoffice.template')
@section('titulo','Listado de Productos')

@section('contenido')
	<div class="container">
		<h1>Listado de Productos</h1>
		<div class="row">
			<div class="col-md-8">
				<!-- FORMULARIO DE FILTROS -->
				<?php
					$nombre = null; $precio=null;
					if($_GET){
						if(isset($_GET['nombre']))
							$nombre = $_GET['nombre'];
						if(isset($_GET['precio']))
							$precio = $_GET['precio'];
					}						
				?>
				<form action="{{ route('productos.index') }}" method="get" class="form-inline">
					<div class="form-group">
						<input type="text" name="nombre" class="form-control"  placeholder="Nombre producto..." value="{{$nombre}}">
					</div>
					<div class="form-group">
						<input type="number" name="precio" class="form-control" placeholder="Precio máximo..." value="{{$precio}}">
					</div>
					<div class="form-group">
						<button class="btn btn-warning"><i class="fa fa-search"></i></button>
						<a class="btn btn-info" href="{{ route('productos.index') }}"><i class="fas fa-sync"></i></a>
					</div>
				</form>
			</div>
			<div class="col-md-4 text-right">
				<!-- BOTONES -->
				<a class="btn btn-success" href="{{ route('productos.create') }}"><i class="far fa-plus"></i></a>
				<!-- BOTON EXPORTAR PDF -->
				<a class="btn btn-warning" href="{{ route('productos-pdf') }}"><i class="far fa-file-pdf"></i></a>

				<!-- BOTON EXPORTAR EXCEL -->
				<a class="btn btn-primary" href="{{ route('productos-excel') }}"><i class="far fa-file-excel"></i></a>
				<button type="button" class="btn btn-info" data-toggle="modal" data-target="#impExcel"><i class="far fa-file-excel"></i></button>
			</div>
		</div>
		<br>
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
						<td class="text-right">${{number_format($producto->costo,0,',','.')}}</td>
						<td class="text-right">${{number_format($producto->precio,0,',','.')}}</td>
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