<!DOCTYPE html>
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

</body>
</html>


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
<title>Ingresar Usuarios</title>

Nombre Dueño: <input type="text" name="nombre_due&ntildeo" value="" class="form-control"></br> 
Rut: <input type="text" name="rut" value="" class="form-control"><br> 
dv: <input type="text" name="dv" value="" class="form-control"><br> 

Fecha De Nacimiento Mascota: <input type="date" name="fecha_de_nacimiento" class="form-control"><br>
Nombre Mascota: <input type="text" name="nombre_mascota" value="" class="form-control"></br> 
Tipo De Sangre: <input type="text" name="tipo_sangre" value="" class="form-control"><br> 
Vacuna: <input type="text" name="vacuna" value="" class="form-control"><br> 
Enfermedad: <input type="text" name="enfermedad" value="" class="form-control"><br>
Tipo De Raza: <input type="text" name="tipo_raza" value="" class="form-control"><br> 
Sexo: <input type="text" name="sexo" value="" class="form-control"><br> 
Telefono: <input type="text" name="telefono" value="" class="form-control"><br> 
<!--Sexo <br/>
<input type="radio" name="sexo" value="macho" checked="checked" /> Macho
<input type="radio" name="sexo" value="hembra" /> Hembra -->
<input type="file" name="imagen" id="imagen" />
<input type="submit" name="submit" value = "enviar" class="btn btn-danger" />

</form>
		</div>
</div>
	</div>
	
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>


</body>
</html>	

<?php
include ('libreria/phpqrcode/qrlib.php');
include ('conexion.php');
if(isset($_POST['submit'])){
	$extensionespermitidas = array('jpg', 'jpeg', 'gif', 'png', 'tif', 'tiff', 'bmp');
	$nombrebre_orig = $_FILES['imagen']['name']; 
    $array_nombre = explode('.',$nombrebre_orig); 
    $cuenta_arr_nombre = count($array_nombre); 
    $extension = strtolower($array_nombre[--$cuenta_arr_nombre]);
     if(in_array($extension, $extensionespermitidas)){
	if ($_FILES['imagen']['size'] <= 2000000) {
		$nombre_dueno = $_POST['nombre_dueno'];
 		$rut = $_POST['rut'];
 		$dv = $_POST['dv'];
 		$fecha_de_nacimiento = $_POST['fecha_de_nacimiento'];
 		$nombre_mascota = $_POST['nombre_mascota'];
 		$tipo_sangre = $_POST['tipo_sangre'];
 		$vacuna = $_POST['vacuna'];
 		$enfermedad = $_POST['enfermedad'];
 		$tipo_raza = $_POST['tipo_raza'];
 		$sexo = $_POST['sexo'];
 		$telefono = $_POST['telefono'];
 		
		if (file_exists($rut)) {
			print "LA CARPETA YA EXISTE";
			}else{
				mkdir("Usuarios/$rut");
				copy($_FILES['imagen']['tmp_name'], "Usuarios/$rut/nuevaImagen.jpg");
				$url = "localhost/Usuarios/$rut/usuarios.php?id=";
				$urlimagen = "Usuarios/$rut/nuevaimagen.png";
				$insert_row = $mysqli->query("INSERT INTO mascotas (nombre_dueno, rut, dv, fecha_de_nacimiento, nombre_mascota, tipo_sangre, vacuna, enfermedad, tipo_raza, sexo, telefono, Imagen) 
				VALUES('".$nombre_dueno."', '".$rut."', '".$dv."', '".$fecha_de_nacimiento."', '".$nombre_mascota."', '".$tipo_sangre."','".$vacuna."','".$enfermedad."','".$tipo_raza."','".$sexo."','".$telefono."','".$urlimagen."')");
					
					if($insert_row){
    print 'Success! ID of last inserted record is : ' .$mysqli->insert_id .'<br />'; 
}else{
    die('Error : ('. $mysqli->errno .') '. $mysqli->error);
}
	
	$ImagenGuar = "localhost/tarea2/Usuarios/".$rut."/".$rut.".png";

    $codeContents  = 'BEGIN:VCARD'."\n"; 
    $codeContents .= 'FN:'.$nombre_dueno."\n";
    //$codeContents .= 'FN:'.$Rut."\n";
    $codeContents .= 'FN:'.$nombre_mascota."\n";
    //$codeContents .= 'FN:'.$Direccion."\n"; 
    $codeContents .= 'TEL;WORK;VOICE:'.$telefono."\n"; 
    //$codeContents .= 'FN:'.$ImagenGuar."\n";
    $codeContents .= 'END:VCARD'; 
  
    QRcode::png($codeContents,"Usuarios/$rut/".$rut.".png",L,4,1);
						
					header('Location: bienvenidos.html');
					}
		}else{
			print("EL TAMAÑO DE LA IMAGEN ES MUY GRANDE");
		}
	}else{
		print ("EL FORMATO ES INCORRECTO");
	}

}
?>



