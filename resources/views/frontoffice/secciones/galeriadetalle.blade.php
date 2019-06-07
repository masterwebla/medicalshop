<div id="demo" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    @foreach($imagenes as $imagen)
      <div class="carousel-item @if($imagen->principal==1) active @endif">
        <img src="{{asset('/imagenes/'.$imagen->archivo.'')}}" width="100%"> 
      </div>
    @endforeach
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>