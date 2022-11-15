<?php
require_once '../config/validate_session.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="styles/styles.css">

</head>
<body>
            
<div class="container">
<a href="../gastos/index.php" class="fade-menu">Modulo Gastos</a>
<a href="../gastos_categorias/index.php" class="fade-menu">Modulo Categorias</a>
<a href="../usuarios/index.php" class="fade-menu">Modulo Usuarios</a>
<a href="../config/logout.php" class="fade-menu">Salir</a>
</div>
</body>
</html>