<?php
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

    $usuarios =[$username =>$password];
    echo "No se logro conectar a la base de datos JSON";

}

// Verifica si el usuario ya existee
if (isset($usuarios[$username])) {

    echo "El nombre de usuario ya existe. Por favor, elige otro.";
    echo "<br>";
    echo "<a href='login_index.php'> o iniciar sesion</a>";
    echo "<br>";

} else {

    //hashea la contrasena, en otras palabras encripta la contrasena
    $hashContrasena = password_hash($password, PASSWORD_BCRYPT);
    // Agrega el nuevo usuario al arreglo
    $usuarios[$username] = $hashContrasena;

    // Guarda el arreglo actualizado en el archivo JSON
    file_put_contents("usuarios.json", json_encode($usuarios));

    echo "Registro exitoso. Ahora puedes iniciar sesión.";

    echo "<br>";
    echo "<a href='login_index.php'> iniciar sesion</a>";
    echo "<br>";
}
?>
