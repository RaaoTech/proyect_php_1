<?php
    //arrrays declaracion tipo 1

    $edades1 = [20, 25, 27];
    //subindices 0,  1,  2
    
    //declaracion tipo 2

    $edades2 = array(23,45,57);
    //sub_indices    0,  1,  2

    //acceso a los elementos de ambos tipo de arrays

    echo "La primera edad es: ". $edades1[1];

    echo "\n";

    echo "La segunda edad es: ". $edades2[0];

    echo "\n";

    //arrays asociativos
    
    //declaracion  
    $edades3 = array(//se puede usar con o sin funcion array

        "Juan" => 20,
        "Mr.Michi" => 25,
        "Carlos" => 27,  // esta ultima coma es opcional     

    );

    //acceso sin strings
    echo $edades3["Mr.Michi"];

    echo "\n";

    //acceso con string
    echo "Hola, tu tienes  {$edades3["Mr.Michi"]} anos de edad ?";
    //se debe de usar estas{  array y valor     }adentro de las comillas dobles

    echo "\n";

    //Arrays Complejos

    //declaracion
    $personas = array( //array Complejo 1

        //Priemer SubArray
        "Carlos" => array( 

            "edad" => 20,
            "apellido" => "Santana",

        ),

        //Segundo SubArray
        "Mr.Michi" => array(

            "edad" => 25,
            "apellido" => "Michisancio",

        ),

       
    );

    //Acceso sin string
    echo $personas["Mr.Michi"]["edad"];

    echo "\n";

    //Acceso con y fuera del string
    echo "La informacion de Mr.Michi es: Edad: ". $personas["Mr.Michi"]["edad"] . " Apellido:  ". $personas["Mr.Michi"]["apellido"]; 

    echo "\n";

    //Acceso con y dentro del string
    echo "La información de Mr.Michi es: Edad: {$personas["Mr.Michi"]["edad"]} Apellido: {$personas["Mr.Michi"]["apellido"]}";

    echo "\n";

    //Funcones Manipuladoras de Arrays

    
    //count() : es una funcion que permite contar los valores adentro de un array empezando por 1

    echo count($edades1);//como hay tres valores, el resultadoo sera 3

    echo "\n";

    echo count($edades3);// observa que hay 3 valores, con sub valores asociados, pero en si, hay 3 valores

    echo "\n";

    echo count($personas);// hay solo dos dub arrays, por lo que el cuenta dos valores(que poseen sub valores), por lo que da 2



    echo "\n";


   
   //array_unigue(): es una funcion que elimina los valores duplicados adentro de un array

    $entrada = array("4", "4", "3", "4", "3", "3");

    $resultado = array_unique($entrada);//eliminamos los valores repetido del array $entrada, y los guardamos en la variable $resultado

    echo "la cantidad de valores adentro del array son ". count($resultado);
    // luego con la funcion count, mostramos la cantidad de valores que quedaron adentro del array, como solo habian dos numeros diferentes, la cantidad sera 2, que son el 3 y el 4



    echo "\n";


    //array_reverse(): es una funcion que invierte la posicion de los valores de un array

    //SINTAXIS: array_reverse(array $array, bool $preserve_keys = false): array 

    //declaramos el array con el que vamos a trabajar
    $input  = array(

        "php", //0
        4.0,   //1
        array( //2

            "verde",  
            "rojo", 

        )

    ); 

    // aca se invierten la posicion de los sub indices, por lo que el sub array sera 0 y php sera 2
    $reversed = array_reverse($input);  

    //con el true activado, aunque el sub array estara de primero, seguira siendo 2 y php 0 , los sub indices no se modificaran
    $preserved = array_reverse($input, true);
   

    print_r($input); // se  muestra el orden inicial del array input

    print_r($reversed);// se muestran los sub indices y los valores volteados, mientras que el subArray sera 0 y php 2

    print_r($preserved);//se muestra el orden  de los valores volteados, mas no el de los subIndices, siendo el SubArray 2 y php 0



    echo "\n";

    

    //array_push(): esta funcion agrega elementos nuevos a un array

    //declaramos nuestro a trabajar, lo declaramos con 6 elementos
    $Edades = [20,25,24,23,27,29,];

    var_dump($Edades);// lo mostramos en pantalla con 6 elelementos

    echo "\n";

    array_push($Edades, 99); // le agregamos un septimo elemento, de tipo int y que sera 99

    var_dump($Edades);// ahora lo mostramos con 7 elementos

    echo "\n";

    array_push($Edades, 25, 99,"99",);// ahora le agregamos 3 elementos mas, dos de tipo int, y uno de tipo string

    var_dump($Edades);// mostramos el mismo array, pero ahora con los 10 elementos en total

   
    echo "\n";


    //is_array() : es una fiuncion que dictamnina si una variable es un arreglo o no

    $lista = ["manzana", "pera", "naranja"];

    var_dump(is_array($lista)); //si es un arreglo por lo que sera TRUE
    
    echo "\n";
    
    $Nombre = "Juanito";

    var_dump(is_array($Nombre)); //No es un arreglo, por lo que es FALSE


    echo "\n";


    //explode(): esta funcion transforma una cadena de strings, en una lista de arrays, a través de un delimitador, que nosotros designemos 

    /*SINTAXIS   explode(delimitador, cadena, limite);

        delimitador: El carácter o cadena de caracteres que se utilizará como punto de división.
        cadena: La cadena original que se dividirá en subcadenas.
        limite (opcional): El número opcional de subcadenas que se generarán. Si se omite, se dividirá en todas las ocurrencias.
    */

    $cadena = "Manzana,Plátano,Naranja,Uva"; // lista original de strings

    $subcadenas = explode(",", $cadena);//desigmanos el delimitador, en este caso la coma, y mencionamos la variable con la lista

    var_dump($subcadenas);



    echo "\n";


    //implode() o join(): son funciones, que concatenan los elementos de un array, en una cadena de strings
    
    /*implode(separador, array);
        separador: El carácter o cadena de caracteres que se utilizará como separador entre los elementos del array.
        array: El array que se desea convertir en una cadena.
    */

    //declaramos nuestro array de trabajo
    $frutas = array(
        "Manzana", 
        "Plátano", 
        "Naranja", 
        "Uva",
    );
    
    //designamos la ","como nuestro delimitador, y mencionamos a nuestro array frutas
    $cadena = implode(", ", $frutas);
    
    echo $cadena; // mostramos en pantalla la nueva cadena de string


    //array_rand(): es una funcion que escoge uno o mas elementos aleatorios de un arrray
    /*
        array_rand(array, cantidad);
        array: El array del cual deseas seleccionar elementos aleatorios.
        cantidad (opcional): El número de elementos aleatorios que deseas seleccionar. Si se omite este parámetro, la función   seleccionará solo un elemento aleatorio.
    */

    $frutas = array("Manzana", "Plátano", "Naranja", "Uva", "Mango");
    $indiceAleatorio = array_rand($frutas);
    echo "Fruta seleccionada: " . $frutas[$indiceAleatorio];

?>