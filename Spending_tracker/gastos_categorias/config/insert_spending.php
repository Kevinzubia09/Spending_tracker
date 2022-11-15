<?php
require_once('../../config/config.php');
$categoria = $_POST['Categoria'];

$query = "INSERT INTO gastos_categorias (Nombre) VALUES ('$categoria')";
//echo $query;
$conexion->query($query);
header("Location: ../index.php?message=ok");
?>