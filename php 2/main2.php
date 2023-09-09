<?php
    session_start();

    $palabras = array("sol", "dia", "hola","perdon","Excelente",);

    // Guardar solo $palabras en la sesión
    $_SESSION['palabras'] = $palabras;

   

    



    $palabrasDesordenado = array();

    $form = "<form action='analisis.php'>
            <h1> Ordena las palabras </h1>";

    $_SESSION['form'] = $form;

    for ($i=0; $i < count($palabras); $i++) { 

        $indice = 0;

        do{
            $palabrasDesordenado[$i] = str_shuffle($palabras[$i]);

            if($palabrasDesordenado[$i] != $palabras[$i]){

                
                $form .= "<p id =".$i."'>".$palabrasDesordenado[$i]."</p>
                            <input type='text' name=".$i.">";

                $indice = 1; 

            };
        }while($indice == 0);

    };

    $style = "<style>

                form {
                    display: inline-grid;
                    width: 50%;
                    height: 50%;
                    margin: 5%;
                }
                input {
                    margin: 5px;
                }
                p {
                    margin: 5px;
                }
                h1 {
                    display: grid;
                    justify-content: space-around;
                }

            </style>";

    $_SESSION['style'] = $style;        

    $button ="<button type='submit'>Enviar</button>";

    $final_del_form ="</form>";



    echo $style.$form.$button.$final_del_form;
         
    

   

?>