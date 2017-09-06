<?php

require_once "conexion.php";

$smt = $conn->prepare("SELECT * FROM alumnos");
$smt =>execute();

$resultado =$smt->setFetchMode(PDO::FETCH_ASSOC);
$resultado = $stmt->fetchAll();

echo "<pre>";
print_r($resultado);
echo "</pre>";


?>

<!DOCTYPE html>
<html lang="en">
<head>
