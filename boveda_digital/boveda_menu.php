<?php
session_start();

$username = $_SESSION['usuarios'];

// Especifica la ruta y el nombre del archivo JSON
$archivo_json = "$username.json";

// Leer el contenido del archivo JSON (si existe)
if (file_exists($archivo_json)) {
    $passwords = json_decode(file_get_contents($archivo_json), true);
}else{
    $passwords = [
        
        ];
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bóveda</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Establece el mínimo de altura de la vista */
        }

        header {
            background-color: #333;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
        }

        #cerrar-boveda, #nueva-password {
            background-color: #777;
            color: #fff;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        #cerrar-boveda:hover, #nueva-password:hover {
            background-color: #555;
        }

        #titulo-boveda {
            font-size: 24px;
            font-weight: bold;
        }

        #contenido {
            margin: 20px;
            flex: 1; /* El contenido ocupará todo el espacio disponible verticalmente */
        }

        .contrasena, #usuario, #uso {
            display: grid;
            width: 90%;
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
            text-align: center;
            background-color: #f5f5f5;
        }

        #nueva-password {
            width: 90%;
            background-color: #777;
            color: #fff;
            font-weight: bold;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }
        /* Estilo para el botón de borrado */
        .boton-borrar {
            background-color: #ff3b30; /* Color de fondo rojo */
            color: #fff; /* Color del texto blanco */
            padding: 10px 20px; /* Espaciado interno */
            border: none; /* Sin borde */
            border-radius: 5px; /* Esquinas redondeadas */
            cursor: pointer; /* Cambia el cursor a una mano */
            font-weight: bold; /* Texto en negrita */
            transition: background-color 0.3s; /* Transición de color al pasar el mouse */
        }

        /* Cambia el color de fondo al pasar el mouse */
        .boton-borrar:hover {
            background-color: #ff453a; /* Color de fondo rojo más oscuro al pasar el mouse */
        }
        .contrasenaP {
            margin: 0px;
            
        }
        .input_boton_cerrar {
            width: 0px;
            height: 0px;
        }
    </style>
</head>
<body>
    <header>

        <form action="login_index.php" method="post">

            <button id="cerrar-boveda">Cerrar Bóveda</button>

        </form>

        <div id="titulo-boveda">BÓVEDA</div>
    </header>
    <div id="contenido">

    <?php foreach($passwords as $indice => $password): ?>

        <div id="<?= $indice ?>" class ="contrasena">
        
            <p class="contrasenaP">Uso: <?= $password['uso']?></p>
            <br>
            <p class="contrasenaP">Usuario: <?= $password['usuario']?></p>
            <br>
            <p class="contrasenaP" >Contraseña: <?= $password['contrasena']?></p>
            <br>
            <form action="boton_cerrar.php" method="post">
                <input type="hidden" class="input_boton_cerrar" name="input" value="<?= $indice ?>">
                <button class="boton-borrar" >Borrar</button>
            </form>
        </div>
        
    <?php endforeach ?>

    <form action="contrasena_aleatoria.php" method="post">
        <button id="nueva-password" type="submit">NEW or CHANGE PASSWORD</button>
    </form>       
        

    </div>
    <footer>
        Contacto
    </footer>
</body>
</html>
