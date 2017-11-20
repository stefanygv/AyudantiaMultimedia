<?php
$conexion = mysqli_connect("localhost", "root", "", "proyectomultimedia");
 
$rut = "id del alumno que se desea eliminar";
 
mysqli_query($conexion, "DELETE FROM mascotas WHERE rut = " . $rut);
mysqli_close($conexion);
?>
