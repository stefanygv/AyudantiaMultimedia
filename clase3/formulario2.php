<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">


<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>

<body>

<div class="container">
	<div class="row"> 
		<div class="col-md-6 well">
		<h3>Alumno</h3>
	<form action="procesar.php" method="GET">
	Nombre:<input type="text" name="nombre">
	<br>
	Apellido:<input type="text" name="apellido">
	<br>
	Rut:<input type="text" name="rut">
	<br>
	<input type="hidden" name="alumno_formulario">
	<input type="submit" value="Enviar" class="btn btn-success">
	</form>
		</div>
		<div class="col-md-6 well">
		
	<h3>Ramo</h3>
	<form action="procesar.php" method="POST">
	Ramo: <input type="text" name="ramo">
	<br>
	Nota:<input type="text" name="nota">
	<br>
	Rut:<input type="text" name="rut">
	<br>
	<input type="hidden" name="ramo_formulario">
	<input type="submit" value="Enviar" class="btn btn-danger">
	</form>
	
		</div>
		
</div>
	</div>
	<div class ="row">

	<div class="col-md-12">

	<button class="btn btn-success btn-lg" onclick="procesarDatoAlumnos()">Consulta Alumnos</button>
</div>
</div>
</div>	

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>

	<script>
	function procesarDatoAlumnos() {
		$.ajax({
			method: "POST",
			url: "ajax.php",
			data: { nombre: "Jon" }
		})
			.done(function( msg ){
				alert( "Data Saved: " + msg );
			});

	}
	</script>
</body>
</html>	