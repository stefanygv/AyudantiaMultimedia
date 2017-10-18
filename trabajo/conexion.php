<?php


function conectar (){
	$usuario = "root";
	$clave="";
	$db_nombre="trabajoayudantia";
	$host="localhost";
	$conn = new PDO ("mysql:host=$host;dbname=$db_nombre",$usuario, $clave);
	return $conn;
}
//$conn =null; cerrar

?>