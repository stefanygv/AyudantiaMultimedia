<?php 
include ('conexion.php');
function getUsuarios($id){

		$conn = conectar();
		$sql = "SELECT * from usuarios where id='".$id."'";
		$st = $conn -> prepare($sql);
		$st -> execute();
		$resultado = $st -> fetch();
		$conn = null;
		return $resultado;

} 

if (true)  {
	$res = getUsuarios($_GET['param2']);
	//echo "<input type='text' name='nombre".$_GET['param2']."'>";
	//$res [0]['nombre_usuario'];

	//$res es la var a recorrer
	//$key es un cont que empieza en cero
	//$value es el sobrenombre que se le da a $res
	/*foreach ($res as $key => $value) {
			
		echo $value['nombre_usuario'];
		echo "<br>";
		echo $value['contrasena'];
		echo "<br>";
		echo $value['correo'];

		echo "<br>";
		}	*/
	//echo "<pre>";
	//print_r($res);
	//echo "</pre>";
	echo json_encode($res);
	//echo "<br>";
}else{
	echo "2";
}
 ?>