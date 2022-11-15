<?php
require_once('../../config/config.php');
$nombre = $_POST['nombre'];
$status = $_POST['status'];
$correo = $_POST['email'];
$password = $_POST['password'];
$telefono = $_POST['telefono'];
$id = $_POST['ID'];


$query = "UPDATE usuarios set nombre= '$nombre', status= '$status', correo= '$correo', password= '$password', telefono= '$telefono' WHERE ID=$id";
//echo $query;
$conexion->query($query);
header("Location: ../index.php?message=Success_Registro");
?>