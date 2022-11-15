<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMPT;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

require_once('config.php');
$email = $_POST['email'];



$query="SELECT *FROM usuarios WHERE correo='$email' AND status=1";
$conexion->query($query);
$result = $conexion->query($query);
//echo $query
$row = $result->fetch_assoc();


if ($result->num_rows > 0){
    $mail = new PHPMailer(true);
try {


$mail->isSMTP();
$mail->Host       = 'smtp-mail.outlook.com';
$mail->SMTPAuth   = true;
$mail->Username   = '00676185@red.unid.mx';
$mail->Password   = 'Cinema@092021';
$mail->Port       = 587;

$mail->setFrom('00676185@red.unid.mx', 'Spending Tracker');
$mail->addAddress($email, 'Joe User');


$mail->isHTML(true);
$mail->Subject = 'Recuperacion de password';
$mail->Body    = 'Hola, Este es un correo generado para solicitar tu recuperacion de contraseña, Por favor visita la siguiente pagina
<a href="localhost/spending_tracker/change_password.php?id='.$row['ID'].'"> recuperar password </a>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$mail->send();
header("location: ../index.php?message=ok");
} catch (Exception $e) {
    header("location: ../index.php?message=error");
}

}else{
    header("location: ../index.php?not_found");
}

?>