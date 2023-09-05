<?php

    /*ciclo while() : es un condicional infinito, el cual nos permite iterar bucles de forma controlada segun el estado de una variable contador*/ 

    $contador = 0;

    while($contador < 25){

        echo "\n";
        $contador += 1;
        echo "Hola yo soy la iteracion  {$contador}";
        echo "\n";

    }

    /*ciclo do{...}while(): este ciclo ejecuta la condicion por lo menos una vez, y luego verifica la condicion para decidir si se va a ejecutar el codigo anterior una vez mas */

    $usernames = ["Maria", "Pilar", "Juan", "Pepito", "Mr.MIchi"];

    do{
        $username = readline("Ingrese su Username: ");

    }While(in_array($username, $usernames) == false);
  
    /*ciclo for() = este ciclo nos permite definir una serie de variables y condiciones que determinaran la cantidad de itreciones de un bucle */

    for($i = 0; $i < count($usernames) ; $i++){
        echo "El usuario numero {$i} es ". $usernames[$i];
        echo "\n";
    }

    //ciclo foreach(): es un ciclo el cual es usado para iterar y trabajr con arrays, pues este, automaticamente detecta el tamano de un array y puede iterar y trabajr con sus elementos sin necesidad de especificar su tamano

    $tiendita_de_cafes = array(
        //$cafe        $price
        "Americano" => 20,
        "Guayoyo" => 23,
        "Marron" => 24,
        "Achocolatao" => 25.99,
        "Cafe Frio" => 23.99,
        "Latte" => 25,
        "Capuccino" => 27.5,
        "Mocca" => 24,
    );

            //array a iterar     subindice  valor del sub indice  
    foreach ($tiendita_de_cafes as $cafe => $price){ // si pones solamente $price, te dara el precio si agrega $cafe => $price, podras usar ambas varibales pudiendo dejar una sin usar si es de tu gusto

        echo "El café {$cafe} cuesta $ {$price} USD \n";
    
    
    echo "\n";
    };


    echo "Te voy a decir que cafe me gusta de ese menu\n";

     
    // funcion del Continue
    foreach($tiendita_de_cafes as $cafe => $price){

        echo "\n";

        if($cafe == "Americano"){
         
            continue;//cuando encuentre el cafe americano, Continue hara que lo salte, directamente al siguiente elemento
        };

        echo "el {$cafe} me gusta";

        echo "\n";

    };
    
    echo "\n";

    echo "Ahora dejame verificar el Latte, que es mi preferido\n";
    
    echo "\n";

    // funcion del Break

    foreach($tiendita_de_cafes as $cafe => $price){

        echo "\n";

        if($cafe == "Americano"){

            echo "el {$cafe} no es bueno, es pura agua caliente, y no es latte";

            echo "\n";
            continue;

        };

        if($cafe == "Latte"){
         
            echo "ENCONTRAMOS A LATTEEE!!  y solo cuesta $ {$price} USD";
            break;//Cuando encuentre el cafe latte, Se acaba inmediatamente el ciclo foreach() y continuara con el resto del codigo
        };

        echo "el {$cafe} es bueno, mas no es latte";

        echo "\n";

    };

?>
