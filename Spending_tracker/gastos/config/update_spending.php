<?php
require_once('../../config/config.php');
$cantidad = $_POST['Cantidad'];
$categoria = $_POST['Categoria'];
$descripcion = $_POST['Descripcion'];
$id = $_POST['ID'];


$query = "UPDATE gastos set Cantidad = '$cantidad', Categoria = '$categoria', Descripcion = '$descripcion' WHERE ID=$id";
//echo $query;
$conexion->query($query);
header("Location: ../index.php?message=Success_Registro");
?>