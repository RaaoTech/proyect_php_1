<?php

$Correo = "R440gz@gmail.com";
$Password = "6871";
$variable_de_control_1 = 0;
$fondos = 55;
$variable_de_control_2 = 0;
$variable_de_control_3 = 0;

echo "\n";
$Usuario = readline("Hola, ¿quién eres? : ");
echo "\n";
$Correo_Usuario = readline("Hola {$Usuario}, ingresa tu correo: ");
echo "\n";
$Password_Usuario = readline("Ingresa tu contraseña: ");
    
// Verificación del correo
do {
    if ($Correo == $Correo_Usuario) {
        echo "\n";
        echo "Correo identificado";
        $variable_de_control_1 = 0.5;
    } else {
        echo "\n";
        echo "Correo no identificado";
        $Correo_Usuario = readline("Vuelve a ingresar tu correo: ");
    }
} while ($variable_de_control_1 == 0);

// Verificación de la contraseña
do {
    if ($Password == $Password_Usuario) {
        echo "\n";
        echo "Contraseña correcta";
        $variable_de_control_1 = 1;
    } else {
        echo "\n";
        echo "Contraseña incorrecta";
        echo "\n";
        $Password_Usuario = readline("Vuelve a ingresar tu contraseña: ");
    }
} while ($variable_de_control_1 == 0.5);

// Presentación del tablero
if ($variable_de_control_1 == 1) {

    do{
        echo "\n";
        echo "      Bienvenido, {$Usuario}\n";
        echo "      Usuario: {$Usuario}\n";
        echo "      Fondos: {$fondos}\n";
        echo "    1 Retirar Fondos\n";
        echo "    2 Aumentar Fondos\n";
        echo "\n";
   

    
        $Desicion_1 = readline("¿Qué deseas hacer? (1 o 2): ");
        // Toma de decisiones
        switch ($Desicion_1) {
            case 1:
                $variable_de_control_2 = 0;

                if ($fondos > 100) {

                    $fondos -= ($fondos * 0.1); // Restar el 10%
                    echo "\n";
                    echo "FELICIDADES, se han transferido {$fondos} a tu cuenta bancaria después de pagar la comisión.\n";

                    $variable_de_control_2 = 1;
                    echo "\n";

                } else {

                    echo "\n";

                    echo "Lo lamentamos, pero tus fondos aún no son mayores a 100.\n";

                    echo "\n";
                }
                break;

            case 2:
            $variable_de_control_2 = 0;
            do{
                
                $variable_de_control_3 = 0;

                $Comando = readline("Escribe 'MAS VIDEOS' para obtener más fondos, o 'FIN' para terminar: ");

                if ($Comando == "MAS VIDEOS") {
                    $fondos += 25;
                    echo "\n";
                    echo "Ahora tus fondos son de: {$fondos}\n";
                    echo "\n";

               

                } elseif ($Comando == "FIN") {
                echo "\n";

                echo "Terminaste la operación.\n";

                $variable_de_control_3 = 1;

                echo "\n";
                } else {
                echo "\n";

                echo "Responde adecuadamente 'MAS VIDEOS' o 'FIN'.\n";
                
                echo "\n";
                }
            }while($variable_de_control_3 == 0);

            break;

            default:
            echo "\n";
            echo "Debes elegir entre 1 o 2.\n";
            echo "\n";
        }
    }while($variable_de_control_2 == 0);

}else{};

?>