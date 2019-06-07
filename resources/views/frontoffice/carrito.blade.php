@extends('frontoffice.template')
@section('titulo','Carrito de Compras')

@section('contenido')
	<div class="container">
		<h3 class="text-center">Carrito de Compras</h3>
		<hr>
		@if(!empty($carrito))
			<div class="text-center">
				<a class="btn btn-danger" href="{{ route('carrito-vaciar') }}">Vaciar Carrito <i class="fa fa-trash"></i></a>
			</div>
		@endif
		<div class="catalogo">
			@if(!empty($carrito))
				<form id="formcarrito" action="{{ route('carrito-actualizar') }}" method="get">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Producto</th>
								<th style="width: 50px">Precio</th>
								<th>Cant</th>
								<th>Subtotal</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php $total = 0; ?>
							@foreach($carrito as $producto)
							 	<?php $total += $producto->precio * $producto->cantcompra; ?>
								<tr>
									<td>
										{{$producto->nombre}}
										<input type="hidden" name="id" value="{{$producto->id}}">
									</td>
									<td class="text-right">${{number_format($producto->precio,0,',','.')}}</td>
									<td>
										<input id="cant" name="cant" onblur="actualizar({{$producto->id}})" type="number" value="{{$producto->cantcompra}}" style="width: 3em">
									</td>
									<td>${{$producto->precio * $producto->cantcompra}}</td>
									<td><a class="btn btn-danger" href="{{ route('carrito-borrar',$producto->id) }}"><i class="fa fa-trash"></i></a></td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</form>
				<div class="text-center">
					<h4>Total: ${{number_format($total,0,',','.')}}</h4>
				</div>
				<div class="text-center">
					<a class="btn btn-primary" href="{{ route('inicio') }}">Continuar comprando</a>
					<a class="btn btn-success" href="#">Pagar</a>
				</div>
			@else
				<h4 class="text-center">No tiene productos agregados :(</h4>
				<a class="btn btn-primary" href="{{ route('inicio') }}">Comprar</a>
			@endif
			
		</div>
	</div>
@endsection

<script>
	function actualizar(id){
		formcarrito.submit();
		
	}
</script>