<?php
require_once('config.php');
$id = $_POST['id'];
$pass = $_POST['new_password'];

$query ="UPDATE usuarios set password= '$pass' WHERE ID= $id";
$conexion->query($query);

header("location: ../index.php?message=Success_Password");


?>