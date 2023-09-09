<?php

    function edad_estudiante($nombre,$grupo){
         
        $edad = 0;
     
        if($grupo != null){   
             foreach( $grupo as $name => $edad_del_Estudiante){

                $name2 = strtolower($name);

                if($name2 == $nombre){
                    
                    $edad = $edad_del_Estudiante;
                    return $edad;
                    break;
                }
            }
        }
    
        return $edad;
                
    }
    function Lugar_Juguete($edad,$nombre){
        echo "\n";
   
        if($edad < 5 && $edad != 0){

            echo "el Estudiante ". $nombre." tiene sus juguetes en la parte inferior de la bodega.";

        }else if($edad >= 5 && $edad <7){

            
            echo "el Estudiante ". $nombre." tiene sus juguetes en la parte media de la bodega.";

        }else if($edad >7){

            echo "el Estudiante ". $nombre." tiene sus juguetes en la parte alta de la bodega.";

        }else{
            echo "el Estudiante ". $nombre." tiene sus juguetes en la bodega de al lado.";
        };
        echo "\n";
    };
    function registrar_Nuevo_Estudiante($nombre,$edad,$grupo,$archivoJSON){

        $grupo[$nombre] = $edad;

        // Vuelve a codificar el array en formato JSON
        $jsonActualizado = json_encode($grupo, JSON_PRETTY_PRINT);

        // Escribe el JSON actualizado de vuelta al archivo
        file_put_contents($archivoJSON, $jsonActualizado);

    };

    // Ruta al archivo JSON
    $archivoJSON = "juguetes_de_los_ninos.json";

    // Comprueba si el archivo JSON existe
    if (!file_exists($archivoJSON)) {
        // Si el archivo no existe, crea un array vacío
        $estudiantes = [
            "Maria" => 5,
            "Pedro" => 4,
            "Juan" => 10,
            "Leo" => 7,
            "Pepito" => 9,
            "Jose" => 8,
            "Lina" => 3,
            "Pilar" => 9,
        ];
      
    } else {

        // Si el archivo existe, lee su contenido y decodifícalo desde JSON
        $estudiantes = json_decode(file_get_contents($archivoJSON), true);
    
        echo "\n";
    }


    $estudiante = strtolower(readline("Nombre del Estudiante:  "));


    $edad = edad_estudiante($estudiante,$estudiantes);

    if($edad == 0){

        echo "su hijo no esta registrado \n";

        $indice_1 = 0;

        do{

            $desicion = readline("Desea registralo?(s/n): ");

            if($desicion == "s"){

                $nueva_edad = (int) readline("Edad: ");

                registrar_Nuevo_Estudiante($estudiante,$nueva_edad ,$estudiantes,$archivoJSON);

                echo "El estudiante ". $estudiante . " de ". $nueva_edad. " anos de edad, ya ha sido registrado";
                $indice_1 = 1;


            }else if($desicion == "n"){

                echo "Que tenga un buen dia";
                $indice_1 = 1;

            }else{

                echo "responde con una  's' para SI o una 'n' para NO ";

            };

        }while( $indice_1 == 0);    




    }else{
        
        Lugar_Juguete($edad,$estudiante);

    };

























?>