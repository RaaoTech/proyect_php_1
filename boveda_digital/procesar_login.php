<?php
session_start();
if(isset($_POST)){

    // Obtén los datos del formulario
    $username = strtolower($_POST["username"]);
    $password = $_POST["password"];

}else{
    echo "Fallo en la red";
}

// Lee el archivo JSON existente (si lo hay)
$usuarios = [];
if (file_exists("usuarios.json")) {

    $usuarios = json_decode(file_get_contents("usuarios.json"), true);

}else{

    echo "No se logro conectar a la base de datos JSON, o no existe";

}

// Verifica si el usuario ya existee
if (isset($usuarios[$username])) {

    $contrasena_original = $usuarios[$username];

    if(  password_verify ($password, $contrasena_original) ){

        $_SESSION['usuarios'] = $username;

        echo "Bienvenido". $username."La boveda ya esta abierta";

        // Redirige al usuario a otro archivo PHP
        header("Location: boveda_menu.php");
        exit; // Asegúrate de detener la ejecución del script después de la redirección

    }else{
        echo "Tu contrasena no ha sido encontrada, vuelve a intentarlo";

        echo "<br>";
        echo "<a href='login_index.php'> iniciar otra vez sesion</a>";
        echo "<br>";
        echo "<a href='registro.php'> intenta Registrarte</a>";
    };

//si no existe dale la opcion
}else{
    echo "Tu Usuario no ha sido encontrado, vuelve a intentarlo";

        echo "<br>";
        echo "<a href='login_index.php'> iniciar otra vez sesion</a>";
        echo "<br>";
        echo "<a href='registro.php'> intenta Registrarte</a>";

}