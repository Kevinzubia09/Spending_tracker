<?php
require_once '../config/validate_session.php'
?>
<?php
require_once("../config/config.php");
$query = "SELECT * FROM usuarios";
$conexion->query($query);
$result = $conexion->query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spending_tracker</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>


<body>

    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col">
               <h1>Usuarios <a href="form-insert-user2.php" class="btn btn-primary" >Añadir</a></h1>
            </div>
          <div class="col">
          <a href="../menu/menu.php" class="btn btn-info" >Menú</a></h1>  
          </div>
        </div>
    </div>
    <div class="container">
    <div class="col">
<?php
    
    if(isset($_GET['message'])){
    
        ?>
        <div class="alert alert-primary" role="alert">
        <?php
        switch ($_GET['message']){
            case 'ok':
            echo 'Registro añadido';
            break;
            case 'Success_Registro':
            echo 'Registro editado correctamente';
            break;
            case 'delate':
                echo 'Registro eliminado correctamente';
                break;
                default:
                echo 'Algo salio mal, Intenta de nuevo';
        }
    }
        ?>
        </div>
        </div>
    <div class="row mt-5">
    <div class="col">

      <table class="table table-striped table-hover">
          <thead>
            <tr>
                <th>ID</th>  
                <th>Nombre</th>  
                <th>Correo Electronico</th>  
                <th>Status</th>  
                <th>Telefono</th>
</tr>
</thead>
<tbody>
    <?php
    while ($row = $result->fetch_assoc()) {
        ?>
    <tr>
        <td><?php echo $row["ID"]; ?> </td>
        <td><?php echo $row["nombre"]; ?> </td>
        <td><?php echo $row["correo"]; ?> </td>
        <td><?php echo $row["status"]; ?> </td>
        <td><?php echo $row["telefono"]; ?> </td>
        <td>
            <a href="form-update-user.php?ID=<?php echo $row["ID"]; ?>" class="btn btn-warning" >Editar</a>
            <a href="config/delete_user.php?ID=<?php echo $row["ID"]; ?> "   class="btn btn-danger" >Eliminar</a>

        </td>

</tr>
</tbody>
<?php } ?>
      </table>  
    </div>
    </div>
</body>
</html>