<?php
    function clear() {
        if (PHP_OS === "WINNT"){
            echo "\033[2J\033[1;1H";
        } else {
            system("clear");
        };
    };

    

    function check_letters($word, $letter, $discovered_letters) {
        $offset = 0;
    
        // Verifica que $letter no esté vacío antes de continuar
        if (!empty($letter)) {
            $longitud = iconv_strlen($letter, 'UTF-8');
            $discovered_letters = str_split($discovered_letters);
    
            while (($letter_position = strpos($word, $letter, $offset)) !== false) {
                $discovered_letters[$letter_position] = $letter;
                $offset = $letter_position + 1;
            }
    
            $resultado = implode('', $discovered_letters);
            return  $resultado;
        } else {
            return $discovered_letters;
        }
    }

    
        
    
    

    // empieza el juego
    define("VIDAS", 6);

    $Possible_words = array("Manzana", "Platano", "Naranja", "Uva", "Mango");

    $indiceAleatorio = array_rand($Possible_words);

    $rand_word = strtolower($Possible_words[$indiceAleatorio]);
    $word_lengt = iconv_strlen($rand_word, 'UTF-8');

    $discovered_word = str_repeat("_", $word_lengt); // Usar str_repeat para crear una cadena de guiones bajos

    $intentos = 0;

    $indice = 0;
    //empieza la parte visual del juego

    do{
        echo "EL JUEGO DEL AHORCADO!! \n\n";
        echo "  Es una Palabra de ". $word_lengt." letras \n";
        echo "  Tienes ". (VIDAS - $intentos) ." intentos \n\n";
        echo "         ". $discovered_word . "\n";

    
            $player_letter = strtolower(readline("Escoge una letra: \n")??" ");
            $player_letter2 = substr($player_letter, 0, 1);//nos aseguramos de solo agarrar el primer y

            if (str_contains($rand_word, $player_letter2)) {// verificamos la letra ingresada esta en la palabra aleatoria

                $discovered_word = check_letters($rand_word, $player_letter2, $discovered_word, );//esta funcion comprueba la ubicacion exacta de la letra ingresada en la palabra
                echo $discovered_word;


            } else {
                clear();

                echo "letra incorrecta >=( \n";
                $intentos += 1;
                echo "Tienes ". (VIDAS - $intentos)." intentos \n ";

                sleep(1);
                
            }
            if($discovered_word == $rand_word){
                clear();
                
                echo "\n";
                echo "Has descubierto La Palabra, FELICIDADES \n";
                echo "      ". $discovered_word;

                sleep(2);

                clear();

                $indice = 1;
            };
            if($intentos >= VIDAS){
                echo "Lo lamentamos amigo, era ". $rand_word;
                $indice = 1;
            };
            clear();
    } while ($indice == 0);

    echo "\n";
?>


    

    
