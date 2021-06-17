<!DOCTYPE html>
	<html>
	<head>
		<title>Registrar</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	</head>
	<body><br>
		<form method="post" action="{{route('guardar')}}">
			{{ csrf_field() }}
		<div class="container">
			<h1 class="header text-center font-weight-bold text-info mb-4">Registro de Datos</h1>
			<div class="container card shadow mb-4">
				<div class="row ">
					<div class="col col-md-3 mb-2">
						<label>C Habit</label>
						<input type="number" name="c_habit" class="form-control" >
					</div>
					<div class="col col-md-3 mb-2">
						<label>C Baños</label>
						<input type="number" name="c_baños" class="form-control">
					</div>
					<div class="col col-md-3 mb-2">
						<label>Colonia</label>
						<input type="text" name="colonia" class="form-control" >
					</div>
					<div class="col col-md-3 mb-2">
						<label>Precio</label>
						<input type="number" name="precio" class="form-control" >
					</div>
				</div>

				<div class="row ">
					<div class="col col-md-3 mb-2">
						<label>Tamaño</label>
						<input type="number" name="tamanio" class="form-control">
					</div>
					<div class="col col-md-3 mb-2">
						<label>Municipio</label>
						<input type="text" name="municipio" class="form-control"  >
					</div>
					<div class="col col-md-3 mb-2">
						<label>Departamento</label>
						<input type="text" name="departamento" class="form-control">
					</div>
					<div class="col col-md-3 mb-2">
						<label>Categoria</label>
						<input type="text" name="categoria" class="form-control" >
					</div>
				</div>

				<div class="row">
					<div class="col col-md-3 mb-2">
						<label>Negociable</label>
						<input type="text" name="negociable" class="form-control" >
					</div>
					<div class="col col-md-3 mb-2">
						<label>Estado</label>
						<input type="text" name="estado" class="form-control" >
					</div>
					
				</div>
				<div><button id="re" type="submit" class="btn bg-success text-light mb-2" value="Save">Registrar</button></div>
			</div>
		</div>
		</form>

		<script type="text/javascript">
			$(document).ready(function(){
				$('button').click(function{
				var registrado=$('#re').val();	
				if(registrado){
                $.ajax({
                 
                    success: function(registrado){
                        if (registrado==1) {
                           swal({
								  title: "Good job!",
								  text: "You clicked the button!",
								  icon: "success",
								  button: "Aww yiss!",
								});
                        } else {
                            swal({
                                title: 'Error',
                                text: 'Usuario no Registrado',
                                icon: 'error',
                                }).then(function(){
                                    location.reload();
                                })
                
                        }
                    }
                });
            }
				});	
			});
		</script>
	</body>
	</html>	
	