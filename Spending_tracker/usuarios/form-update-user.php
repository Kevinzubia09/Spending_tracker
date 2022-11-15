<?php
require_once '../config/validate_session.php'
?>
<?php
require_once("../config/config.php");
$id = $_GET['ID'];
$query = "SELECT * FROM usuarios";
$result = $conexion->query($query);

$query2 = "SELECT * FROM usuarios WHERE ID=$id";
//echo $query2
$result2 = $conexion->query($query2);
$record = $result2->fetch_assoc();


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

            <form action="config/update_user.php" method="POST">
    <div class="row mt-5">
        <div class="col-6">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $record ['nombre'] ?>">
</div>
            <div class="col-6">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" name="status" id="status">
                <option value="0" >0</option>
                <option value="1" selected>1</option>
                
            </select>
</div>
            <div class="col-6 mb-3">
            <label for="correo" class="form-label">Correo Electronico</label>
            <input type="email" class="form-control" name="email" id="email" value="<?php echo $record ['correo'] ?>">
            </div>
            <div class="col-6">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" value="<?php echo $record ['password'] ?>">
</div>
<div class="col-6 mb-3">
            <label for="telefono" class="form-label">telefono</label>
            <input type="text" class="form-control" name="telefono" id="telefono" value="<?php echo $record ['telefono'] ?>">
</div>
            <div class="col-12">
                <input type="hidden" name="ID" value="<?php echo $id; ?>">
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </form>
        
    </div>
</div>
    
</body>
</html>