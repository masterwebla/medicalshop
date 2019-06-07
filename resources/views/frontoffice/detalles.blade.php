@extends('frontoffice.template')
@section('titulo','Bienvenido a nuestra tienda')

@section('contenido')
	<div class="container catalogo">
		<h2 class="text-center">{{$producto->nombre}}</h2>
		<div class="row">
			<!--Galeria -->
			<div class="col-md-6">
				@include('frontoffice.secciones.galeriadetalle')
			</div>
			<!-- Descripcion -->
			<div class="col-md-6">
				<div class="row descripcion">
					<div class="col-md-12">
						<p>{{$producto->descripcion}}</p>
					</div>
				</div>
				<div class="row descripcion">
					<div class="col-md-12">
						<p>{{$producto->descripcion_larga}}</p>
					</div>
				</div>
				<div class="row descripcion text-center">
					<div class="col-md-12">
						<span class="precio">${{number_format($producto->precio)}}</span>
						<div>
							<a href="{{ route('carrito-agregar',$producto->id) }}" class="btn btn-primary">Agregar <i class="fa fa-shopping-cart"></i></a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
@endsection