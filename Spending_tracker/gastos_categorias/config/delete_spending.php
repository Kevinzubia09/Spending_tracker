<?php
require_once('../../config/config.php');
$id = $_GET['ID'];


$query = "DELETE FROM gastos_categorias WHERE ID=$id";
//echo $query;
$conexion->query($query);
header("Location: ../index.php?message=delate");
?>