<?php
require_once('config.php');
$nombre = $_POST['nombre'];
$pass = $_POST['password'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];



$query = "INSERT INTO usuarios (nombre, password, correo, telefono) VALUES ('$nombre', '$pass', '$correo', '$telefono')";
//echo $query;
$conexion->query($query);



header("Location: ../index.php?message=new_user");
?>