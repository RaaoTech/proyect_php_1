<?php

/*
    echo "<pre>";

    print_r($_FILES);

    echo "</pre>";
*/

$basename = $_FILES["image"]["name"];
$ruta_original_imagen = $_FILES["image"]["tmp_name"];
$ruta_nueva_imagen = "imagenes/$basename";

move_uploaded_file($ruta_original_imagen, $ruta_nueva_imagen);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="<?= $ruta_nueva_imagen ?>" alt="">
</body>
</html>
