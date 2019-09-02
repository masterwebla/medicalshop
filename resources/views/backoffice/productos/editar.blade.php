@extends('backoffice.template')
@section('titulo','Editar producto')

@section('titulosect')
	Editar Producto {{$producto->nombre}}
@endsection

@section('contenido')
	<div class="container">
		@include('backoffice.secciones.errores')
		<form action="{{ route('productos.update',$producto->id) }}" method="post">
			@method('put')
			@csrf
			<div class="form-group">
				<label>Nombre</label>
				<input type="text" name="nombre" class="form-control" value="{{$producto->nombre}}" required>
			</div>
			<div class="form-group">
				<label>Descripcion</label>
				<textarea name="descripcion" class="form-control" required>{{$producto->descripcion}}</textarea>
			</div>
			<div class="form-group">
				<label>Descripcion detallada</label>
				<textarea name="descripcion_larga" class="form-control">{{$producto->descripcion_larga}}</textarea>
			</div>
			<div class="form-group">
				<label>Costo</label>
				<input type="number" value="{{$producto->costo}}" name="costo" class="form-control" min="0" max="10000000" required>
			</div>
			<div class="form-group">
				<label>Precio</label>
				<input type="number" value="{{$producto->precio}}" name="precio" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Cantidad</label>
				<input type="number" value="{{$producto->cantidad}}" name="cantidad" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Unidad</label>
				<select name="unidad_id" class="form-control" required>
					<option value="">Seleccionar unidad</option>
					@foreach($unidades as $unidad)
						<option @if($producto->unidad_id==$unidad->id) selected @endif value="{{$unidad->id}}">{{$unidad->nombre}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label>Estado</label>
				<select name="estado_id" class="form-control" required>
					<option value="">Seleccionar estado</option>
					@foreach($estados as $estado)
						<option @if($producto->estado_id==$estado->id) selected @endif value="{{$estado->id}}">{{$estado->nombre}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<button class="btn btn-success">Actualizar</button>
			</div>
		</form>
	</div>
@endsection