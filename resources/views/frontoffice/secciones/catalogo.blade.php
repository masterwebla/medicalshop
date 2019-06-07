<div class="container">
	<div class="row">
		@foreach($productos as $producto)
			@if($producto->principal==1)
				<div class="col-md-3 card">
				  <img class="card-img-top" src="{{asset('imagenes/'.$producto->archivo.'')}}" alt="{{$producto->nombre}}">
				  <div class="card-body">
				    <h5 class="card-title">{{$producto->nombre}}</h5>
				    <p class="card-text text-center">{{$producto->descripcion}} <br>
					${{number_format($producto->precio,0,',','.')}}
				    </p>
				    <div class="text-center">
				    	<a href="{{ route('detalles',$producto->id) }}" class="btn btn-warning"><i class="fa fa-plus"></i></a>
					    <a href="{{ route('carrito-agregar',$producto->id) }}" class="btn btn-primary"> <i class="fa fa-shopping-cart"></i></a>
				    </div>
				  </div>
				</div>
			@endif
		@endforeach
	</div>
</div>	