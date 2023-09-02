<?php

    // "if" = Este  condicional  permite tomar decisiones en tu código.
    // Comprueban si una condición es verdadera y ejecutan un bloque de código si lo es.

    $edad = 18; // Ejemplo de variable

    if ($edad >= 18) { // Sintaxis del "if"
        echo "Eres mayor de edad. puedes votar"; // Este bloque se ejecuta si la condición es verdadera.
    } else {
        echo "Eres menor de edad. No puedes votar"; // Este bloque se ejecuta si la condición es falsa.
    }


     //  "else if" : Los condicional permite tomar decisiones más complejas en tu código.

     $edad = 18; // Ejemplo de variable

     if ($edad < 13) { // Sintaxis del "if"

         echo "Eres un niño.";

     } else if ($edad < 18) { // Sintaxis del "else if"

         echo "Eres un adolescente.";

     } else { // Sintaxis del "else"

         echo "Eres mayor de edad.";

     }

    //"Switch" : es un condicional que sirve para hacer desiciones entren un catalogo de opciones apartir de una variable

    $codigo = 404;

    switch ($codigo) {
    case 200:

        echo "Éxito: Recurso encontrado.";
        break;

    case 404:

        echo "Error: Recurso no encontrado.";
        break;

    // Otros casos...
    default:
        echo "Error desconocido.";
    }

    /* si le quitamose el break a un case, el compilador seguira leyendo el codigo hasta llegar al siguiente break,
    lo que nos permite hac3er los siguiete*/

    switch ($codigo) {
        case 200:
    
           //como no hay un break, el compilador seguira de largo, y mostrara el codigo del cas 404
    
        case 404:
    
            echo "Error: Recurso no encontrado.";
            break;
    
        // Otros casos...
        default:
            echo "Error desconocido.";
        }




?>