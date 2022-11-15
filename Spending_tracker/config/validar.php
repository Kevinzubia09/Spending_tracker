<?php
require_once('config.php');
$email = $_POST['email'];
$password = $_POST['password'];



$query="SELECT *FROM usuarios WHERE correo='$email' AND password='$password' AND status=1";
$conexion->query($query);
$result = $conexion->query($query);
//echo $query
$row = $result->fetch_assoc();



//print_r ($result);


//$row=mysqli_num_rows($result);

if ($row){
    session_start();
    $_SESSION['email']=$email;
    header("location: ../menu/menu.php");
    
}else{
    ?>
     <?php
      header("location: ../index.php?message=");
     ?>
    
<?php
}
mysqli_free_result($result);
mysqli_close($conexion);
