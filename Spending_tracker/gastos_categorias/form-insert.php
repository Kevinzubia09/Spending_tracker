<?php
require_once '../config/validate_session.php'
?>
<?php
require_once("../config/config.php");
$query = "SELECT * FROM gastos_categorias";
$conexion->query($query);
$result = $conexion->query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="row mt-5">
            <div class="col">
               <h1>Gastos <a href="index.php" class="btn btn-dark">Regresar</a></h1>
            </div>

            <form action="config/insert_spending.php" method="POST">
    <div class="row mt-5">
        <div class="col-6">
            <label for="Cantidad" class="form-label">Categoria</label>
            <input type="text" class="form-control" name="Categoria" id="Categoria">
</div>
            
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </form>
        
    </div>
</div>
    
</body>
</html>