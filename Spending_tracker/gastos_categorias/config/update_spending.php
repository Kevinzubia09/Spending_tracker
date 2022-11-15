<?php
require_once('../../config/config.php');
$categoria = $_POST['Categoria'];
$id = $_POST['ID'];


$query = "UPDATE gastos_categorias set Nombre= '$categoria' WHERE ID=$id";
//echo $query;
$conexion->query($query);
header("Location: ../index.php?message=Success_Registro");
?>