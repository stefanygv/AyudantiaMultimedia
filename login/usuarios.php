<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<style type="text/css">

BODY { background: url(https://i.gse.io/gse_media/115/10/1448396255-Pet-Expo-tickets-1.jpg?p=1) center fixed no-repeat} 

</style></head>
 
<body>
</body>
</html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
</style>
</head>
<body>

<ul>
 <li><a href="Bienvenidos.html">Bienvenidos</a></li>
  <li><a href="formulario.php">Ingresar Usuario</a></li>
  <li><a href="usuarios_modificar.php">Modificar Usuario</a></li> 
  <li><a href="listado.php">Ver Listado</a></li>
  <li><a href="logout.php">Logout</a></li>

</ul>
<br>
</br>
<html lang="en">
<head>
<meta charset="UTF-8">


<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>

<body>

<div class="container">
	<div class="row"> 
		<div class="col-md-6 well">
		<form name="formulario" method="post" action="formulario.php" enctype="multipart/form-data">

<html lang="en">
<head>
	<meta charset="UTF-8">
<title>Usuarios</title>
</body>
</html>
<?php 
include ('conexion.php');
//require_once 'dompdf-0.5.1/dompdf_config.inc.php';

if(isset($_GET['rut'])){
	$rut = $_GET['rut'];
	echo $rut;
	$consulta = "SELECT * FROM mascotas WHERE rut='".$rut."'";

	$res = $mysqli->query($consulta); 
	while($row = $res->fetch_assoc()){
		
		$nombre_dueno = $row['nombre_dueno'];
 		$rut = $row['rut'];
 		$dv = $row['dv'];
 		$fecha_de_nacimiento = $row['fecha_de_nacimiento'];
 		$nombre_mascota = $row['nombre_mascota'];
 		$tipo_sangre = $row['tipo_sangre'];
 		$vacuna = $row['vacuna'];
 		$enfermedad = $row['enfermedad'];
 		$tipo_raza = $row['tipo_raza'];
 		$sexo = $row['sexo'];
 		$telefono = $row['telefono'];
 		
		echo "<br>";
		echo $row['nombre_dueno'];
		echo "<br>";
		echo $row['rut'];
		echo "<br>";
 		echo $row['dv'];
		echo "<br>";
 		echo $row['fecha_de_nacimiento'];
		echo "<br>";
 		echo $row['nombre_mascota'];
		echo "<br>";
 		echo $row['tipo_sangre'];
		echo "<br>";
 		echo $row['vacuna'];
		echo "<br>";
 		echo $row['enfermedad'];
		echo "<br>";
		echo $row['tipo_raza'];
		echo "<br>";
		echo $row['sexo'];
		echo "<br>";
		echo $row['telefono'];
		echo "<br>";
		echo '<img src="Usuarios/'.$rut.'/'.$rut.'.png">';
		echo "<br>";
	}
}

 ?>

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>

	<script>
	function procesarDatoUsuarios() {
		$.ajax({
			method: "POST",
			url: "ajax.php",
			//data: { nombre: "Jon" }
		})
			.done(function( msg ){
				alert( "Data Saved: " + msg );
			});

	}
	</script>
</body>
</html>	
</body>
</html>