<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">MedicalShop</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="{{ route('inicio') }}">Inicio</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Nosotros</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Productos
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Categoria 1</a>
        <a class="dropdown-item" href="#">Categoria 2</a>
        <a class="dropdown-item" href="#">Categoria 3</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Registro</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('carrito-mostrar') }}"><i class="fa fa-shopping-cart"></i></a>
    </li>
  </ul>
</nav>