<!DOCTYPE html>
<html>
<head>
	<title>Productos</title>
</head>
<body>
	<h1>Listado de Productos</h1>
	<table border="1" width="100%">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Descripcion</th>
				<th>Costo</th>
				<th>Precio</th>
				<th>Cantidad</th>
				<th>Unidad</th>
			</tr>
		</thead>
		<tbody>
			@foreach($productos as $producto)
				<tr>
					<td>{{$producto->nombre}}</td>
					<td>{{$producto->descripcion}}</td>
					<td>{{$producto->costo}}</td>
					<td>{{$producto->precio}}</td>
					<td>{{$producto->cantidad}}</td>
					<td>{{$producto->unidad->nombre}}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>