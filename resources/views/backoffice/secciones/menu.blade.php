<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>Tipo: {{Auth::user()->perfil_id}}</h3>
    <ul class="nav side-menu">
      <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="#">Dashboard</a></li>
          <li><a href="#">Dashboard2</a></li>
          <li><a href="#">Dashboard3</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-edit"></i> Productos <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="#">Categorias</a></li>
          <li><a href="{{route('productos.index')}}">Productos</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-desktop"></i> Operacion <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="#">Usuarios</a></li>
          <li><a href="#">Proveedores</a></li>
          <li><a href="#">Unidades</a></li>
          <li><a href="#">Ciudades</a></li>
          <li><a href="#">Notificaciones</a></li>
          <li><a href="#">Ofertas</a></li>
          <li><a href="#">Deseos</a></li>
          <li><a href="#">Metodos Pago</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-table"></i> Estados <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="#">Productos</a></li>
          <li><a href="#">Pedidos</a></li>
          <li><a href="#">Usuarios</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-bar-chart-o"></i> Compras <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="#">Compras</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-clone"></i>Pedidos <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="fixed_sidebar.html">Pedidos</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>