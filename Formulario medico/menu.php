<?php
    $pruebas = [
        1 => "Glicemia",
        2 => "Creatinina",
        3 => "Trigliceridos",
        4 => "Urea",
        5 => "ColesterolTOTAL",
        6 => "ColesterolHDL",
        7 => "ColesterolLDL",
        8 => "ColesterolVLDL",
        
    ];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Análisis Médico</title>
</head>
<style>
        /* Estilos generales */
        .campo-input {
            max-width: 150px;
        }

        /* Estilo para los botones */
        .boton {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            margin: 3%;
        }

        /* Estilo inicial para el div oculto */
        .elemento-oculto {
            display: none;
            background-color: #f0f0f0;
            padding: 20px;
            transition: opacity 0.5s ease;
        }

        /* Estilo para el contenedor principal */
        .container {
            display: inline-grid;
            padding: 5%;
            border: 5px solid lightskyblue;
            border-radius: 5%;
            text-align: center;
        }

        /* Estilo para el botón de enviar */
        .enviar {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            margin: 5px;
        }

        /* Estilo para los botones de género */
        .genero-label {
            display: inline-block;
            margin-right: 10px;
        }
</style>
</head>
<body>
    <div class="container">
        <h1>Formulario de Análisis Médico</h1>
            
            <div id="pruebas">
                <!-- Botones para mostrar/ocultar los divs -->
                <?php foreach ($pruebas as $indice => $prueba): ?>

                    <button class="boton" onclick="mostrarOcultarDiv('<?=$prueba?>')"><?=$prueba?></button>

                <?php endforeach ?>

            </div>
        <form action="analisis.php" method="POST">

        <?php foreach ($pruebas as $indice => $prueba): ?>

            
                <!-- Div <?=$prueba?> -->
                <div id="<?=$prueba?>" class="elemento-oculto">
                    <label for="<?=$prueba?>"><?=$prueba?>:</label>
                    <input type="number" id="<?=$prueba?>" name="<?=$prueba?>" class="campo-input" value="0" step="0.01" required> 
                    <label for="<?=$prueba?>">mg/dl</label>
                </div>

        <?php endforeach ?>

        <div id = "genero">    
            <h2>Seleccione su género:</h2>

            <label for="hombre" class="genero-label">Hombre</label>
            <input type="radio" id="hombre" name="genero" value="hombre">

            <label for="mujer" class="genero-label">Mujer</label>
            <input type="radio" id="mujer" name="genero" value="mujer">

        </div>

        <br>


            
            <input type="submit" value="Enviar" class="enviar">
        </form>
        

</body> 
<script>

        // Función para mostrar u ocultar el div
        function mostrarOcultarDiv(id) {

            let div = document.getElementById(id);
            if (div.style.display === "none") {
                div.style.display = "block";
            } else {
                div.style.display = "none";
            }
        }
</script> 
  








</html>