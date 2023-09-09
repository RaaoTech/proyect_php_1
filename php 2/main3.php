<?php

    $productos = [
        0 => array(
            35,
            1,
            "Perros Caliente",
        ),
        1 => array(
            35,
            2,
            "Hamburguesa",
        ),
        2 => array(
            25,
            1,
            "PesiCola",
        ),
        3 => array(
            25,
            1,
            "CocaCola",

        ),
    ];

    $head = "<head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>Tienda</title>
            </head>
            ";
  

    echo $head. "<form action='estante.php' >

                    <label for=''> Indicar cantidad de productos a ingresar: </label> <br>

                    <input type='number' name='productsQuantity' >

                    <button type='submit'>Enviar</button>

                </form>";


    

?>