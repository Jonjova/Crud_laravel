<!DOCTYPE html>
<html>
<head>
	<title>Vivienda</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head>
<style type="text/css">
	.boton{
		margin-left: 12px;
	}

	.icon-cog { 
    color: rgb(213,77,11); 
} 

	.icon-act{
		
		color: rgb(64,83,162);
	}
	h1{
		color:rgb(19,19,151);
	}	
</style>
<body>
	<div class="container-fluid">
		<div class="shadow p-3 mb-5 bg-white rounded">
			<div>
				
				<h1 class="head font-weight-bold text-center ">Vivienda</h1>
			</div>
				<table border="1" class="table">
					<thead class="thead-dark">
						<tr>
							<th hidden>id</th>
							<th>C habit</th>
							<th>C Baños</th>
							<th>Colonia</th>
							<th>Precio</th>
							<th>Tamaño</th>
							<th>Municipio</th>
							<th>Departamento</th>
							<th>Categoria</th>
							<th>Negociable</th>
							<th>Estado</th>
							<th>Creado</th>
							<th>editado</th>
							<th >Actualizar</th>
							<th>Eliminar</th>
						</tr>
					</thead>
			    <tbody>
						@foreach ($casas as $vista)
						<tr>
							<td>{{$vista->c_habit}}</td>
							<td>{{$vista->c_baños}}</td>
							<td>{{$vista->colonia}}</td>
							<td>{{$vista->precio}}</td>
							<td>{{$vista->tamanio}}</td>
							<td>{{$vista->municipio}}</td>
							<td>{{$vista->departamento}}</td>
							<td>{{$vista->categoria}}</td>
							<td>{{$vista->negociable}}</td>
							<td>{{$vista->estado}}</td>
							<td>{{$vista->created_at}}</td>
							<td>{{$vista->updated_at}}</td>
							<td><a class="btn " href="{{ route('editar', $vista->id)}}"><i class="far fa-2x fa-edit icon-act"></i></a></td>
							<td><a class="btn" href="/eliminar/{{$vista->id}}"><i class="fas fa-2x fa-trash-alt icon-cog"></i></a></td>
						</tr>
						@endforeach 
					</tbody>
				
				</table>
		</div>		
	</div>
	<a href="{{ url('/b') }}" class="btn bg-primary text-light">agregar</a>
	

</body>
</html>