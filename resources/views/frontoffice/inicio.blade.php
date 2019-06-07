@extends('frontoffice.template')
@section('titulo','Bienvenido a nuestra tienda')

@section('contenido')
	<!-- SLIDER -->
	@include('frontoffice.secciones.slider')
	<!-- CATALOGO -->
	<div class="catalogo">
		@include('frontoffice.secciones.catalogo')
	</div>
@endsection