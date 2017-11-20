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
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

<ul>
 <li><a href="Bienvenidos.html">Bienvenidos</a></li>
  <li><a href="formulario.php">Ingresar Usuario</a></li>
  <li><a href="usuarios_modificar.php">Modificar Usuario</a></li> 
  <li><a href="listado.php">Ver Listado</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
<br>
</br>
</body>
</html>

<?php 
include ('conexion.php');
if(isset($_GET['rut'])) {
    $rut = $_GET['rut'];
    $consulta = "SELECT * FROM mascotas WHERE rut = '$rut'";
    $res = $mysqli->query($consulta);
    while($row = $res->fetch_assoc()){
    	echo '<form action="" method="post">
    	<html lang="en">
<head>
<meta charset="UTF-8">


<link rel="stylesheet" type="text/css" href="css/bootstrap.css">


</head>

<body>

<div class="container">
	<div class="row"> 
		<div class="col-md-6 well">
Nombre Dueno: <input type="text" name="nombre_dueno" value="'.$row['nombre_dueno'].'"><br>
Rut: <input type="text" name="rut" value="'.$row['rut'].' " readonly><br>
Dv: <input type="text" name="dv" value="'.$row['dv'].'"><br>
Fecha De Nacimiento Mascota: <input type="date" name="fecha_de_nacimiento" readonly><br>
Nombre Mascota: <input type="text" name="nombre_mascota" value="'.$row['nombre_mascota'].'"><br>
Tipo De Sangre: <input type="text" name="tipo_sangre" value="'.$row['tipo_sangre'].'"><br>
Vacuna: <input type="text" name="vacuna" value="'.$row['vacuna'].'"><br>
Enfermedad: <input type="text" name="enfermedad" value="'.$row['enfermedad'].'"><br>
Tipo De Raza: <input type="text" name="tipo_raza" value="'.$row['tipo_raza'].'"><br>
Sexo: <input type="text" name="sexo" value="'.$row['sexo'].'"><br>
Telefono: <input type="text" name="telefono" value="'.$row['telefono'].'"><br>

<input type="submit" name = "submit" value="Modificar" class="btn btn-danger">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</form>';
    }
}

 ?>


 <?php 
if(isset($_POST['submit'])){
		$dv = $_POST['dv'];
		$nombre_dueno = $_POST['nombre_dueno'];
		$nombre_mascota = $_POST['nombre_mascota'];
 		$tipo_sangre = $_POST['tipo_sangre'];
 		$vacuna = $_POST['vacuna'];
 		$enfermedad = $_POST['enfermedad'];
 		$tipo_raza = $_POST['tipo_raza'];
 		$sexo = $_POST['sexo'];
 		$telefono = $_POST['telefono'];


	$insert_row = $mysqli->query("UPDATE mascotas SET dv ='".$dv."', nombre_dueno ='".$nombre_dueno."', nombre_mascota = '".$nombre_mascota."', tipo_sangre = '".$tipo_sangre."', vacuna = '".$vacuna."', enfermedad = '".$enfermedad."', tipo_raza = '".$tipo_raza."', sexo = '".$sexo."', telefono = '".$telefono."' WHERE rut = '".$rut."'");

if($insert_row){
    print 'Datos modificados' .$mysqli->insert_id .'<br />'; 
}else{
    die('Error : ('. $mysqli->errno .') '. $mysqli->error);
}
}

  ?>