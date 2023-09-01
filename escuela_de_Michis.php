<?php

    $Escuela = array(

        "Michi_1" => array(

            "Nombre" => "Miauricio",
            "Color" => "Morado",
            "Ocupacion" => "Ingeniero Aeroespacial",
            "Comida" => array(
                "comida_Favorita" => "Cachapa_con_Queso",

                "comida_Poco_Apreciada" => "Caraotas",
            ),
        ),
        "Michi_2" => array(

            "Nombre" => "Carmericia",
            "Color" => "Rosado",
            "Ocupacion" => "Bioquimica",
            "Comida" => array(
                "comida_Favorita" => "Mac Hamburguesa",
                "comida_Poco_Apreciada" => "Chocolate",
            ),
            
        ),
        "Michi_3" => array(

            "Nombre" => "Juanaricio",
            "Color" => "Azul",
            "Ocupacion" => "Analista Financiero",
            "Comida" => array(
                "comida_Favorita" => "Cochino Frito",
                "comida_Poco_Apreciada" => "Arroz",
            ),
            
        ),
    );

    $Haber_respondido_mal = 0;
    $variable_de_Control_1 = 3;
    
    do{
   
    $Confirmacion = readline("Quieres ver algun gato? (S/N) ");

    if($Confirmacion == "s" || $Confirmacion == "S" ){

        for ($i = 0; $i <= (count($Escuela)-1); $i++) {

            $Numero_del_Michi =( $i + 1);
            echo "\n";

            echo "Michi ". $Numero_del_Michi. ": ". $Escuela["Michi_{$Numero_del_Michi}"]["Nombre"];

            echo "\n";
        }
        $variable_de_Control_1 = 1;  

    }elseif( $Confirmacion == "n" || $Confirmacion == "N"){

        
        echo "Que tenga buen dia Miauw Amigo";

        echo "\n";
        
        $variable_de_Control_1 = 0;


    }elseif($Haber_respondido_mal == 0){

        $Haber_respondido_mal += 1;

        echo "responda con un S o N, sino, Miaw, tendre que morderte >:( ";

        echo "\n";
    }
    elseif($Haber_respondido_mal == 1)
    {
        
        echo "    Te lo adverti.... MIAAAAWWWW!!!! *morder*, te lo MIAW dije";

        echo "\n";
        $variable_de_Control_1 = 0;
    }
    }while( $variable_de_Control_1 > 2);    

    $variable_de_Control_2 = 2;

    if($variable_de_Control_1 == 1)
    {
        do{
        echo "\n";
        $Gato_a_ver = readline("Cual Gato quieres ver? 1 2 3 ");
        if($Gato_a_ver == 1)
        {
        
            echo "      Nombre: ". $Escuela["Michi_1"]["Nombre"];

            echo "\n";

            echo "      Ocupacion: ". $Escuela["Michi_1"]["Ocupacion"];

            echo "\n";
        
            echo "      Color: ". $Escuela["Michi_1"]["Color"];
        
            echo "\n";
        
            echo "      Comida: " ;
            echo "\n";
            echo"              Favorita: ". $Escuela["Michi_1"]["Comida"]["comida_Favorita"];
            echo "\n";
            echo "             No Favorita: ". $Escuela["Michi_1"]["Comida"]["comida_Poco_Apreciada"];

            $variable_de_Control_2 = -1;
            $Haber_respondido_mal = 0;
        

        }
        elseif ($Gato_a_ver == 2){
      
            echo "      Nombre: ". $Escuela["Michi_2"]["Nombre"];

            echo "\n";

            echo "      Ocupacion: ". $Escuela["Michi_2"]["Ocupacion"];

            echo "\n";
        
            echo "      Color: ". $Escuela["Michi_2"]["Color"];
        
            echo "\n";
        
            echo "      Comida: " ;
            echo "\n";
            echo "             Favorita: ". $Escuela["Michi_2"]["Comida"]["comida_Favorita"];
            echo "\n";
            echo "             No Favorita: ". $Escuela["Michi_2"]["Comida"]["comida_Poco_Apreciada"    ];
            $variable_de_Control_2 = -1;
          
            $Haber_respondido_mal = 0;

        }
        elseif($Gato_a_ver == 3)
        {
        
          echo "      Nombre: ". $Escuela["Michi_3"]["Nombre"];

          echo "\n";

          echo "      Ocupacion: ". $Escuela["Michi_3"]["Ocupacion"];

          echo "\n";
        
          echo "      Color: ". $Escuela["Michi_3"]["Color"];
        
          echo "\n";
        
          echo "      Comida: " ;
          echo "\n";
          echo"              Favorita: ". $Escuela["Michi_3"]["Comida"]["comida_Favorita"];
          echo "\n";
          echo "             No Favorita: ". $Escuela["Michi_3"]["Comida"]["comida_Poco_Apreciada"];

 
          $variable_de_Control_2 = -1;

          $Haber_respondido_mal = 0;
       
        }
        elseif($Haber_respondido_mal == 0 )
        {

        $Haber_respondido_mal += 1;
        
        echo "responda con 1, 2 o 3, sino, Miaw, tendre que morderte >:( ";


        }
        elseif($Haber_respondido_mal >= 1 )
        {
            $Haber_respondido_mal = 0;

            echo "  te lo advertii..... MIAAAAAAAWWWWWW!!!! *Morder*";

        };
        }while($Haber_respondido_mal > 0);
    };
    




?>