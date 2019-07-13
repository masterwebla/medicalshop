@extends('backoffice.template')
@section('titulo','Caja')

@section('contenido')
	<div class="container-fluid">
		<div class="row">
			<!-- BLOQUE DE LOS PRODUCTOS  -->
			<div class="col-md-8">
				<!-- FILTROS DE PRODUCTOS -->
				<div class="row">
					<div class="col-md-12">
						<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Buscar por nombre" onkeyup="buscarProductos(this.value)">
					</div>
				</div>
				<br>
				<div class="row" style="overflow: scroll;" id="productos">
					{{--
					@foreach($productos as $producto)
						<div class="col-md-3 card" onclick="addCart({{$producto->id}},'{{$producto->nombre}}',{{$producto->precio}})">
							<img class="card-img-top" src="imagenes/{{$producto->imagen}}" alt="{{$producto->nombre}}">
							<div class="card-body">
							    <h6 class="card-title">{{$producto->nombre}}</h6>
							    <p class="card-text">${{number_format($producto->precio,0,',','.')}}</p>
							</div>
						</div>
					@endforeach
					--}}
				</div>
			</div>
			<!-- BLOQUE DEL CARRITO  -->
			<div class="col-md-4">
				<div class="card">
				  <div class="card-header">VENTAS <input type="text" id="total" value="0"></div>
				  <div class="card-body">
				  	<table id="carrito" class="table table-striped">
				  		<thead>
				  			<tr>
				  				<th>Productos</th>
				  				<th>Cant</th>
				  				<th>Subtotal</th>
				  				<th>Total</th>
				  				<th></th>
				  			</tr>
				  		</thead>
				  		<tbody>
				  			
				  		</tbody>
				  	</table>
				  </div> 
				  <div class="card-footer" id="botones">
					<div class="row">
						<div class="col-md-6">
							<button onclick="limpiarCart()" class="btn btn-danger btn-block">Cancelar</button>
						</div>
						<div class="col-md-6">
							<button class="btn btn-success btn-block">Pagar <span id="totalinf"></span></button>
						</div>
					</div>
				  </div>
				</div>

			</div>
		</div>

	</div>
@endsection

@section('scripts')
	<script>
		$('#botones').hide();
		buscarProductos('');
		function addCart(id,nombre,precio){
			$('#botones').show();
			var total = parseInt($('#total').val());
			total += parseInt(precio);
			$('#total').val(total);
			$('#totalinf').html('<strong>$'+total+'</strong>');
			$('#carrito').append('<tr><td><input type="hidden" name="id[]" value="'+id+'">'+nombre+'</td><td><input onchange="cambCant(this.value,'+precio+')" style="width:2em" type="number" name="cantidad[]" value="1" min="1"></td><td>$'+precio+'</td><td>$'+precio+'</td><td><button onclick="borrar(this,'+precio+')" class="btn btn-danger"><i class="fa fa-trash"></i></button></td></tr>');

		}

		function borrar(boton,precio){
			var total = parseInt($('#total').val());
			total -= parseInt(precio);
			$('#total').val(total);
			$('#totalinf').html('<strong>$'+total+'</strong>');
			$(boton).parent().parent().remove();
		}

		//función para buscar productos
		function buscarProductos(nombre){
			$.ajax({
				url: "{{route('buscar-productos')}}",
				data: {nombre:nombre},
				type: "get",
				success: function(productos){
					//console.log(productos);
					$('#productos').empty();
					/*
					$.each(productos,function(index,prodObj){
						var nombrep = "'"+prodObj.nombre+"'";
						$('#productos').append('<div onclick="addCart('+prodObj.id+','+nombrep+','+prodObj.precio+')" class="col-md-3 card"><img class="card-img-top" src="imagenes/'+prodObj.imagen+'"><div class="card-body"><h6 class="card-title">'+prodObj.nombre+'</h6><p class="card-text">$'+prodObj.precio+'</p></div></div>');
					});
					*/

					$('#productos').html(productos);
				}
			});
		}
		function limpiarCart(){
			$('#botones').hide();
			$('#carrito').empty();
		}
	</script>
@endsection








