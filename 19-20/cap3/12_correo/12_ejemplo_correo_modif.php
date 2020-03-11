<?php

use PHPMailer\PHPMailer\PHPMailer;

require "../vendor/autoload.php";
$mail = new PHPMailer();

$mail->IsSMTP();
// cambiar a 0 para no ver mensajes de error
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;
$mail->SMTPSecure = "tls";
$mail->Host = "smtp.gmail.com";
$mail->Port = 587;

// introducir usuario de google
$mail->Username = "vigojoomla2013";
// introducir clave
$mail->Password = "dwcs20192020";
$mail->SetFrom('vigojoomla2013@gmail.com', 'Test');
// asunto
$mail->Subject = "Correo de prueba";
// cuerpo
$mail->MsgHTML('Prueba');
// adjuntos
$mail->addAttachment("empleados.xml");//Cambié xsd por xml
// destinatario
$address = "patricia.gonzalez.pardo@gmail.com";
$mail->AddAddress($address, "Test");
// enviar
$resul = $mail->Send();

if (!$resul) {
    echo "Error" . $mail->ErrorInfo;
} else {
    echo "<br>Enviado";
}