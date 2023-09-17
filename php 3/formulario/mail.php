<?php

require 'vendor/autoload.php'; // Ruta correcta al archivo autoload.php de PHPMailer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendMail($asunto, $detalles, $email, $name, $html = false){
    //configuración inicial de correos
    $phpmailer = new PHPMailer(true); // Agregado "true" para habilitar excepciones

    try {
        $phpmailer->isSMTP();
        $phpmailer->Host = 'smtp.gmail.com';
        $phpmailer->SMTPAuth = true;
        $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;  
        $phpmailer->Port = 465;
        $phpmailer->Username = 'R440gz@gmail.com';
        $phpmailer->Password = 'zxzbyybzcybndpea';

        // Recipients
        $phpmailer->setFrom('Contact@miempresa.com', 'Mi empresa');
        $phpmailer->addAddress($email, $name); // Add a recipient

        // Content
        $phpmailer->isHTML($html); // Set email format to HTML (o a false si no es HTML)

        $phpmailer->Subject = $asunto;
        $phpmailer->Body = $detalles;

        // Enviar el correo
        $phpmailer->send();
        
        echo 'Correo enviado correctamente.';
    } catch (Exception $e) {
        echo 'Error al enviar el correo: ' . $phpmailer->ErrorInfo;
    }
}






?>






