<?php

    function Descuento($descuento = 35,$precio = 100,$input = 1){

        if(!is_numeric($precio)){
            $precio = "<p> lo siento pero no pasaste ningun valor en el prducto ". $input."</p> </br>";
           
        }else{

            $rebaja = ($precio * $descuento) / 100;
            $precio = $precio -$rebaja;
        }

        return $precio;
    }

    $form = "<form action='proceso_tienda.php' >";

    $form_final = "</form>";

    


   foreach($_REQUEST as $input => $precio){ 
    
        
            

   
            $form.= "<p > Precio del Producto ". $input." : </p>
    
                <p>".Descuento(35,$precio,$input)."</p> <br>";
       
        
    
        
    };

    echo $form.$form_final;
    

    


?>