<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Análisis Médico</title>
</head>
<style>
    .campo-input {
        max-width: 150px;
    }

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
<body>
    <h1>Formulario de Análisis Médico</h1>

    <!-- Botón para mostrar/ocultar el div -->
    <button class="boton" onclick="mostrarOcultarDiv()">Mostrar/Esconder</button>

    <div id="Muestras" class="elemento-oculto">

        <form action="glicemia.php" method="POST">

            <label for="glicemia">Glicemia:</label>
            <input type="number" id="glicemia" name="glicemia" class="campo-input" required>
            <input type="submit" value="Enviar">

        </form>
            <br>

        <form action="colesterol.php" method="POST">

            <label for="colesterol">Colesterol:</label>
            <input type="number" id="colesterol" name="colesterol" class="campo-input" required>
            <input type="submit" value="Enviar">

        </form>
            <br>
            
        <form action="colesterol.php" method="POST">    

            <label for="creatinina">Creatinina:</label>
            <input type="number" id="creatinina" name="creatinina" class="campo-input" required>
            <input type="submit" value="Enviar">

        </form>
            <br>
    </div>   
    <script>

        // Función para mostrar u ocultar el div
        function mostrarOcultarDiv() {
            let div = document.getElementById("Muestras");
            if (div.style.display === "none") {
                div.style.display = "block";
            } else {
                div.style.display = "none";
            }
        }
    </script>     

</body>
</html>