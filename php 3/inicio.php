<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Botón para Mostrar/Esconder</title>
    <style>
        /* Estilo para el botón */
        .boton {
            background-color: #007BFF; /* Color de fondo del botón */
            color: #fff; /* Color de texto del botón */
            padding: 10px 20px; /* Espaciado interno del botón */
            border: none; /* Eliminar el borde del botón */
            cursor: pointer;
        }

        /* Estilo inicial para el div oculto */
        .elemento-oculto {
            display: none; /* Inicialmente oculto */
            background-color: #f0f0f0; /* Color de fondo del div */
            padding: 20px; /* Espaciado interno del div */
            transition: opacity 0.5s ease; /* Transición de opacidad */
        }
    </style>
</head>
<body>
    <!-- Botón para mostrar/ocultar el div -->
    <button class="boton" onclick="mostrarOcultarDiv()">Mostrar/Esconder</button>

    <!-- Div que se mostrará/ocultará -->
    <div class="elemento-oculto" id="miDiv">
        <!-- Contenido del div -->
        <p>Este es un elemento div que se muestra de forma suave.</p>
    </div>

    <script>
        // Función para mostrar u ocultar el div
        function mostrarOcultarDiv() {
            var div = document.getElementById("miDiv");
            if (div.style.display === "none") {
                div.style.display = "block";
            } else {
                div.style.display = "none";
            }
        }
    </script>
</body>
</html>

