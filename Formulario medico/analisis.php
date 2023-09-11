<?php
function resultado($prueba = 0, $resultado = 0, $genero = "hombre")
{
    $mensaje = " ";
    $color = "black";
    

    if ($resultado > 0 && isset($resultado)) {

        if ($prueba == "Glicemia") {

            if ($resultado < 70) {
                $mensaje = "Nivel BAJO de glicemia";
                $color = "yellow";
            } else if ($resultado > 110 && $resultado < 200) {
                $mensaje = "Nivel ALTO de glicemia";
                $color = "red";
            } else if ($resultado > 200) {
                $mensaje = "Nivel Diabético";
                $color = "red";
            } else {
                $mensaje = "Niveles NORMALES de glicemia";
                $color = "green";
            }
        } else if ($prueba == "Trigliceridos") {

            if ($resultado < 150) {
                $mensaje = "Niveles NORMALES de Triglicéridos";
                $color = "green";
            } else if ($resultado > 150) {
                $mensaje = "Nivel ALTO de Triglicéridos";
                $color = "yellow";
            } else if ($resultado > 199) {
                $mensaje = "Niveles MUY ALTOS de Triglicéridos";
                $color = "red";
            }
        }else if ($prueba == "Urea"){

            if ($resultado < 10) {
                $mensaje = "Niveles BAJOS de Urea";
                $color = "yellow";
            } else if ($resultado > 45) {
                $mensaje = "Niveles ALTOS de Urea";
                $color = "red";
            } else {
                $mensaje = "Niveles NORMALES de Urea";
                $color = "green";
            }

        }else if ($prueba == "Creatinina"){

            if ($resultado < 0.5) {
                $mensaje = "Niveles BAJOS de Creatinina";
                $color = "yellow";
            } else if ($resultado > 1.5) {
                $mensaje = "Niveles ALTOS de Creatinina";
                $color = "red";
            } else {
                $mensaje = "Niveles NORMALES de Creatinina";
                $color = "green";
            }

        }else if ($prueba == "ColesterolTOTAL"){

            if ($resultado > 200) {
                $mensaje = "Niveles ALTOS de Colesterol Total";
                $color = "red";
            }else {
                $mensaje = "Niveles NORMALES de Colesterol TOTAL";
                $color = "green";
            }

        }else if ($prueba == "ColesterolHDL"){

            if($genero == "hombre"){

                if ($resultado > 63) {
                    $mensaje = "Niveles ALTOS de Colesterol HDL";
                    $color = "red";
                }else if($resultado < 26){
                    $mensaje = "Niveles BAJOS de Colesterol HDL";
                    $color = "yellow";
                }else{
                    $mensaje = "Niveles NORMALES de Colesterol HDL";
                    $color = "green";
                }
            }else if($genero == "mujer"){

                if ($resultado > 75) {
                    $mensaje = "Niveles ALTOS de Colesterol HDL";
                    $color = "red";
                }else if($resultado < 35){
                    $mensaje = "Niveles BAJOS de Colesterol HDL";
                    $color = "yellow";
                }else{
                    $mensaje = "Niveles NORMALES de Colesterol HDL";
                    $color = "green";
                }
            }else{
                $mensaje = "No seleccionastes genero, y no te podemos dar tus resultados";
                    $color = "black";
            }
        }else if($prueba == "ColesterolLDL" ){

                if ($resultado >= 150) {
                    $mensaje = "Niveles ALTOS de Colesterol LDL";
                    $color = "red";
                }else{
                    $mensaje = "Niveles NORMALES de Colesterol LDL";
                    $color = "green";
                }
            }else if($prueba == "ColesterolVLDL" ){

                if ($resultado >= 40) {
                    $mensaje = "Niveles ALTOS de Colesterol VLDL";
                    $color = "red";
                }else{
                    $mensaje = "Niveles NORMALES de Colesterol VLDL";
                    $color = "green";
                }
            }

        }
    

    return [$mensaje, $color];
}

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Verifica si se seleccionó un género
    if (isset($_POST["genero"])) {
        $genero = $_POST["genero"];
    } else {
        $genero = "No se seleccionó ningún género.";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        foreach ($_POST as $indice => $resultado) {
            if ($indice != "genero") {
                $pruebas[$indice] = $resultado;
            }
        }
    } else {
        $pruebas = ["no se encontro" => "Fallo en la Red"];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de análisis Clínico</title>
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
        margin: 5px;
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

    <?php foreach ($pruebas as $indice => $prueba): ?>

        <?php if ($prueba > 0): ?>

            #<?= $indice ?> {

                <?php list($mensaje, $color) = resultado($indice, $prueba, $genero); ?>

                color: <?= $color ?>; /*Color segun el resultado de la funcion resultado()*/
                font-weight: bold; /* Hace que el texto en todas las etiquetas <p> sea negrita */
            }
        <?php endif ?>

    <?php endforeach ?>

</style>
<body>
<div class="container">
    <h1>Resultados Médicos</h1>
    <p>Tu género es: <?= $genero ?></p>

    <?php foreach ($pruebas as $indice => $prueba): ?>

        <?php if ($prueba > 0): ?>

            <p id="<?= $indice ?>"><?= resultado($indice, $prueba,$genero)[0] ?></p>

        <?php endif ?>

    <?php endforeach ?>

    

</div>
</body>
</html>




