<?php

    session_start();

    // Obtener el array de la sesión
    $palabras = $_SESSION['palabras'];

    $form = $_SESSION['form'];
    
    $style = $_SESSION['style'];

    

    foreach ($_REQUEST as $input => $palabra){
           $medidor = 0;
        for($i = 0; $i < count($palabras); $i++){

            $medidor++;
            
            if($palabras[$i] == $palabra){
                $form.= "<p id=palabra".$i."> felicidades, acertaste con la palabra ".$palabra."</p> </br>";
                break;
            }else if($medidor == count($palabras)){
                $form.= "<p id=palabra".$i."> Lo siento, la palabra correcta era ".$palabras[$input]."</p> </br>";
            }

        }

    }
    echo $style.$form."</form>";

?>