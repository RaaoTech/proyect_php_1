<?php
    
    $array = [2,4,35,45,25,55];

    usort($array, function($a, $b){
        return  $a <=> $b; 
        // si es $a < $b devolvera -1
        //si  es $a == $b devolvera 0
        //si es $a > $b devolvera 1
        //esto le dira a usort() en que posicion organizar los elelemntos del array
    });

    var_dump($array);

    function obtener_hora(){

        date_default_timezone_set('America/Caracas');
        
        return date("h:i a");
    };


    echo "¡Hola! ¿Me podrías decir qué hora es? \n";
    echo "¡Claro! Son las " . obtener_hora();

    echo "\n";

    menu();

    echo "\n";

    obtener_hora2();


    function obtener_hora2(){

        echo "\n";
        $decision = (int) readline("Cual te gustaria saber?");

        switch($decision){

            case 1:

                date_default_timezone_set('America/Caracas');
                break;
            case 2:

                date_default_timezone_set('Europe/Madrid');
                break;  
            case 3:

                date_default_timezone_set('America/New_York');
                break;
            case 4:

                date_default_timezone_set('America/Bogota');
                break;          
            case 5:

                date_default_timezone_set('Asia/Tokyo');
                break;    
            case 6:
                
                date_default_timezone_set('Asia/Shanghai');
                break; 
            default:
                date_default_timezone_set('America/Caracas');
            

        }
            

        
        echo "son las : ". date("h:i a");
    };



    function menu(){   
        echo "Mas sin embargo te puedo decir que hora es en: ";
        echo "\n";
        echo "1 Caracas";
        echo "\n";
        echo "2 Madrid";
        echo "\n";
        echo "3 Nueva York";
        echo "\n";
        echo "4 Bogota";
        echo "\n";
        echo "5 Tokyo";
        echo "\n";
        echo "6 Shanghai";
    };

   
    echo "\n";
?>