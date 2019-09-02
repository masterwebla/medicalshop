@extends('backoffice.template')
@section('titulo','Crear producto')

@section('titulosect','Crear Producto')

@section('contenido')
	<div class="container">
		@include('backoffice.secciones.errores')
		<form action="{{ route('productos.store') }}" method="post">
			@csrf
			<div class="form-group">
				<label>Nombre</label>
				<input type="text" name="nombre" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Descripcion</label>
				<textarea name="descripcion" class="form-control" required></textarea>
			</div>
			<div class="form-group">
				<label>Descripcion detallada</label>
				<textarea name="descripcion_larga" class="form-control"></textarea>
			</div>
			<div class="form-group">
				<label>Costo</label>
				<input type="number" name="costo" class="form-control" min="0" max="10000000" required>
			</div>
			<div class="form-group">
				<label>Precio</label>
				<input type="number" name="precio" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Cantidad</label>
				<input type="number" name="cantidad" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Unidad</label>
				<select name="unidad_id" class="form-control" required>
					<option value="">Seleccionar unidad</option>
					@foreach($unidades as $unidad)
						<option value="{{$unidad->id}}">{{$unidad->nombre}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label>Estado</label>
				<select name="estado_id" class="form-control" required>
					<option value="">Seleccionar estado</option>
					@foreach($estados as $estado)
						<option value="{{$estado->id}}">{{$estado->nombre}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<a class="btn btn-danger" href="{{ route('productos.index') }}">Cancelar</a>
				<button class="btn btn-success">Guardar</button>
			</div>
		</form>
	</div>
@endsection