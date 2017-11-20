<?php  
	session_start();
	if (isset($_SESSION['id'])) {
		header('Location: principal.php');
	}
?>


<!DOCTYPE html>


<html lang="es">
<head>
    <title>Bienvenido</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, user-scalable=no, initial-scale=1 ,maxium-scale =1 , minium-scale =1">
    <link rel="stylesheet" href ="estilos.css">
</head>
<body>
    <form action ="proceso.php" method="post">
    <h2> Bienvenido </h2>

    <input type="text" placeholder= "&#128272; usuario" name="usuario">
    <input type="password" placeholder="&#128272; password" name="password" >
    <input  type ="submit" value="Ingresar">
</form>
</body>
</html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<style type="text/css">

BODY { background: url(https://i.gse.io/gse_media/115/10/1448396255-Pet-Expo-tickets-1.jpg?p=1) center fixed no-repeat} 

</style></head>
 
<body>
</body>
</html>

