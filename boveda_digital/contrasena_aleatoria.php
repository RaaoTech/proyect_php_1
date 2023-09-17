<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bóveda - Ingreso</title>
    <style>
        /* Estilos generales */
        body {
            background-color: #f0f0f0;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: Arial, sans-serif;
        }

        /* Estilos para el formulario */
        .formulario {
            background-color: #ccc;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
        }

        .titulo {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .campo-input {
            display: block;
            width: 90%;
            padding: 10px;
            margin-bottom: 10px;
            border: none;
            border-radius: 3px;
        }
        .formulario {
        width: 25%;
        }

        .boton-ingresar {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-weight: bold;
        }
        .aclaratoria{
            font-size: small;
            margin: 5px;
        }
    </style>
</head>
<body>
    <div class="formulario">
        <div class="titulo">Nueva contrasena</div>
        <div class="aclaratoria">Si se desea cambiar algun dato, puede ingresar el mismo "USO" y cambiar los datos restantes</div>

        <form action="procesar_contrasena.php" method="post">
            <input type="text" name="usuario" class="campo-input" placeholder="Usuario" required>

            <input type="password" name="contrasena" class="campo-input" placeholder="Contraseña" required>

            <input type="text" name="uso" class="campo-input" placeholder="Uso" required>

            <div class="aclaratoria">CUIDADO con colocar el mismo USO, que uno existente, porque se cambiaran los datos del USO anterior</div>

            <button type="submit" class="boton-ingresar">Ingresar</button>

        </form>
    </div>
</body>
</html>
