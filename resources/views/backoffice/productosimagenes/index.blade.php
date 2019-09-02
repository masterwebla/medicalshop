@extends('backoffice.template')
@section('titulo','Imagenes')
@section('titulosect')
	Imágenes para {{$producto->nombre}}
@endsection

@section('contenido')
	<div class="container">
		@include('backoffice.secciones.errores')
		<div class="text-center">
			<form action="{{ route('img-save') }}" method="post" enctype="multipart/form-data">
				@csrf
				<input type="hidden" name="producto_id" value="{{$producto->id}}">
				<input name="archivo" type="file" >
				<button class="btn btn-success">Subir</button>
				<a class="btn btn-danger" href="{{ route('productos.index') }}">Cancelar</a>
			</form>
		</div>
		<hr>
		<div class="row">
			@foreach($imagenes as $imagen)
				<div class="col-md-3 card">
					  <img class="card-img-top" src="{{asset('imagenes/'.$imagen->archivo.'')}}" alt="Card image">
					  <div class="card-body">
					  	{{--
					    <h4 class="card-title">Imagenes</h4>
					    <p class="card-text">{{$imagen->archivo}}</p>
					    --}}
					    <form action="{{ route('img-delete',$imagen->id) }}" method="post">
							@csrf
							<input type="hidden" name="_method" value="delete">
							<button class="btn btn-danger" onClick="return confirm('Eliminar imagen?')"><i class="fas fa-trash"></i></button>
						</form>
					  </div>
				</div>
			@endforeach
		</div>
	</div>
@endsection