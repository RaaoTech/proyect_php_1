<?php

    session_start();

    require("mail.php");
    
    function validate($name, $mail, $asunto, $detalles, $form) {
        return !empty($name) && !empty($mail) && !empty($asunto) && !empty($detalles);
    }
    
    function email_validate($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    function string_validate($name, $asunto, $detalles){

        $nombre = filter_var($name, FILTER_SANITIZE_STRING);
        $asunto = filter_var($asunto, FILTER_SANITIZE_STRING);
        $detalles = filter_var($detalles, FILTER_SANITIZE_STRING);

        $strings = [$nombre, $asunto, $detalles];

        return $strings;



    }
    
    function redirectWithError($errorMessage) {
        $_SESSION['status'] = 'danger';
        $_SESSION['error_message'] = $errorMessage;
        header("Location: formulario.php");
        exit;
        
    }
    
    $_SESSION['status'] = ""; // No necesitas inicializarlo aquí
    $_SESSION['prueba'] = ""; // No necesitas inicializarlo aquí
    
    if (isset($_POST['form'])) {

        if (validate(...$_POST)) {

            $name = $_POST["name"];
            $email = $_POST["mail"];
            $asunto = $_POST["asunto"];
            $detalles = $_POST["detalles"];

            
    
            if (email_validate($email)) {

                $indice = 0;

                $mensaje = [];

                foreach (string_validate($name, $asunto, $detalles) as $key ) {

                   $indice++;

                   $mensaje[$indice]= $key;
                }

             

                $_SESSION['prueba'] = $mensaje[2]; //  mensaje tiene en 1 nombre, 2 asunto, 3 detalles

                $body = "$mensaje[1] <$email> te envia el siguiente mensaje: <br><br> $mensaje[3] ";

                sendMail($mensaje[2], $body, $email, $mensaje[1], true);
                

               
                    
                    
                

                // Envía el correo y realiza otras acciones necesarias
                $_SESSION['status'] = 'success';
                header("Location: formulario.php");
                exit;

               
            } else {
                redirectWithError("La dirección de correo electrónico no es válida.");
            }
            
        } else {
            redirectWithError("Por favor, complete todos los campos obligatorios.");
        }
    }

    ?>