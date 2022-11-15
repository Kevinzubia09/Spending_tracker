<?php
require_once('../../config/config.php');
$nombre = $_POST['nombre'];
$password = $_POST['password'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];



$query = "INSERT INTO usuarios (nombre, password, correo, telefono) VALUES ('$nombre', '$password', '$correo', '$telefono')";
//echo $query;
$conexion->query($query);
header("Location: ../index.php?message=ok");
?>