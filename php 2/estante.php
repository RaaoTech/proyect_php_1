<?php

  

    $form = "<form action='proceso_tienda.php' >";

                

    for($i = 0; $i < $_REQUEST["productsQuantity"]; $i++){

        $numero_del_producto = $i + 1;

        $form.= "<label for=''> Precio del Producto ". $numero_del_producto." </label>

                    <input type='number' name='".$numero_del_producto."' > <br>";

        
    }


    $button = "<button type= 'submit' >Enviar</button>";

    $form_final = "</form>";

    echo $form.$button. $form_final;

?>